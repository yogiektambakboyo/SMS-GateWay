var app = require('http').createServer(),
    io = require('socket.io').listen(app),
	fs = require('fs');
    
var exec = require('child_process').exec;
	
var Tail = require('tail').Tail;
var mysql = require('mysql');

app.listen(8000);

var transaction =  require('node-mysql-transaction');
var trCon = transaction({ 
    connection  : [mysql.createConnection,{
    user        : 'skala',
    password    : 'sc4l4bl3'
  }],
  staticConnection:3,
  dynamicConnection:6,
  timeOut:600
});




tail = new Tail("./log/smsdlog-phone1");
tail0 =new Tail("./log/smsdlog-phone2")

io.set('log level',0);
io.sockets.on('connection',function(socket) {
    /*
        Phone 1 Vodafone
    */
    
    socket.on('Connect_Phone_1',function(data){
           if(data.Con_Phone1_Rep=='Connect_P1')
           {
            io.sockets.emit('StatusConn-phone1', { Status_Rep: 'Status_Conn_P1' });
            var child2 = exec('c:/xampp/htdocs/skala-sms/scripts/bat/gammu-phone1-start.bat', function(err, stdout, stderr) {
                if (err) throw err;
                else console.log(stdout);
                });
            }
    });
    
    socket.on('Disconnect_Phone_1',function(data){
           if(data.Dis_Phone1_Rep=='Disconnect_P1')
           {
            io.sockets.emit('StatusDisConn-phone1', { Status_Rep: 'Status_DisConn_P1' });
            var child2 = exec('c:/xampp/htdocs/skala-sms/scripts/bat/gammu-phone1-stop.bat', function(err, stdout, stderr) {
                if (err) throw err;
                else console.log(stdout);
                });
            }
    });
    
    /*
        Phone 2 Wavecom
    */
    
    socket.on('Connect_Phone_2',function(data){
           if(data.Con_Phone2_Rep=='Connect_P2')
           {
            io.sockets.emit('StatusConn-phone2', { Status_Rep: 'Status_Conn_P2' });
            var child2 = exec('c:/xampp/htdocs/skala-sms/scripts/bat/gammu-phone2-start.bat', function(err, stdout, stderr) {
                if (err) throw err;
                else console.log(stdout);
                });
            }
    });
    
    socket.on('Disconnect_Phone_2',function(data){
           if(data.Dis_Phone2_Rep=='Disconnect_P2')
           {
            io.sockets.emit('StatusDisConn-phone2', { Status_Rep: 'Status_DisConn_P2' });
            var child2 = exec('c:/xampp/htdocs/skala-sms/scripts/bat/gammu-phone2-stop.bat', function(err, stdout, stderr) {
                if (err) throw err;
                else console.log(stdout);
                });
            }
    });
    
});
    
fs.watchFile('./file/inbox.txt', {persistent:true}, function(data) {
	io.sockets.emit('InboxNotify', {Inbox_Rep: 'Inbox_Update'});
    
    /*
     Transaction sinkron db smsd inbox dan dc skala inbox
     */
    var chain = trCon.chain();
    chain.
        on('commit',function(){
            console.log('Commit 86i');
        }).
        on('rollback', function(err){
            console.log(err);
        });
        
        chain.
        query('INSERT INTO skala_sms_slave.inbox(UpdatedInDB,ReceivingDateTime,Text,SenderNumber,Coding,UDH,SMSCNumber,Class,TextDecoded,ID,RecipientID,Processed,Readed) SELECT * from smsd.inbox_tmp').
        query('DELETE FROM smsd.inbox WHERE inbox.ID in (SELECT ID FROM smsd.inbox_tmp)').
        query('DELETE FROM smsd.inbox_tmp').
        on('result',function(result){
            chain.commit();
        }).autoCommit(false);
        trCon.end();
        // End Transaction

});


/*
Tail for Gammu 1
*/
tail.on('line', function(data) {        
      
	if (data.indexOf('SMS sent on device') !== -1){
		io.sockets.emit('SentNotify', { Sent_Rep: 'Sent_Report' });
        
        /*
         Transaction Sinkron Tabel Sent Items
         */
         var chain2 = trCon.chain();
        chain2.
        on('commit',function(){
            console.log('Commit 86s');
        }).
        on('rollback', function(err){
            console.log(err);
        });
        
        chain2.
        query('INSERT INTO skala_sms_slave.sentitems(UpdatedInDB,InsertIntoDB,SendingDateTime,DeliveryDateTime,Text,DestinationNumber,Coding,UDH,SMSCNumber,Class,TextDecoded,ID,SenderID,SequencePosition,Status,StatusError,TPMR,RelativeValidity,CreatorID) SELECT UpdatedInDB,InsertIntoDB,SendingDateTime,DeliveryDateTime,Text,DestinationNumber,Coding,UDH,SMSCNumber,Class,TextDecoded,ID,SenderID,SequencePosition,Status,StatusError,TPMR,RelativeValidity,CreatorID from smsd.sentitems').
        query('DELETE FROM smsd.sentitems').
        on('result',function(result){
            chain2.commit();
        }).autoCommit(false);
        
        
         var chain3 = trCon.chain();
        chain3.
        on('commit',function(){
            console.log('Commit 86ss');
        }).
        on('rollback', function(err){
            console.log(err);
        });
        
        // End Transaction
        
        /*
         Transaction Update Message in sentitems multipart or not
         */
         
        chain3.
        query('UPDATE skala_sms_slave.sentitems b,skala_sms_slave.outbox p SET b.TextDecoded=p.TextDecoded WHERE b.InsertIntoDB=p.InsertIntoDB AND b.DestinationNumber=p.DestinationNumber AND b.UDH=p.UDH').
        query('DELETE FROM skala_sms_slave.outbox').
        on('result',function(result){
            chain3.commit();
        }).autoCommit(false);
        
        
        trCon.end();
        
        }
        //End Transaction
        
    if (data.indexOf('Delivered') !== -1){
    	io.sockets.emit('DeliveryNotify', { Delivery_Rep: 'Delivery_Report' });  
        
        /*
         Transaction Update Delivery Report
         */
         
         var chain4 = trCon.chain();
         chain4.
         query('UPDATE skala_sms_slave.sentitems b,smsd.sentitems p SET b.DeliveryDateTime=p.DeliveryDateTime, b.Status=p.Status WHERE b.InsertIntoDB=p.InsertIntoDB AND b.DestinationNumber=p.DestinationNumber AND b.UDH=p.UDH AND b.ID=p.ID AND b.TPMR=p.TPMR').
         query('DELETE FROM smsd.sentitems').
         on('result',function(result){
            chain4.commit();
         }).autoCommit(false);
         trCon.end();
         }
         //End Transaction
         
         
  	if (data.indexOf('Execute SQL: UPDATE phones') !== -1)
    {
  		io.sockets.emit('StatusConnP1', { Status_RepP1: 'Status_ConnP1' });
     }   
    if(data.indexOf('Disconnecting from SQL database') !== -1){
        io.sockets.emit('StatusDisConnP1', { Status_RepP2: 'Status_DisConnP1' });
        }
});


/*
Tail for Gammu 2
*/
tail0.on('line', function(data) {        
      
	if (data.indexOf('SMS sent on device') !== -1){
		io.sockets.emit('SentNotify', { Sent_Rep: 'Sent_Report' });
        
        /*
         Transaction Sinkron Tabel Sent Items
         */
         var chain2 = trCon.chain();
        chain2.
        on('commit',function(){
            console.log('Commit 87s');
        }).
        on('rollback', function(err){
            console.log(err);
        });
        
        chain2.
        query('INSERT INTO skala_sms_slave.sentitems(UpdatedInDB,InsertIntoDB,SendingDateTime,DeliveryDateTime,Text,DestinationNumber,Coding,UDH,SMSCNumber,Class,TextDecoded,ID,SenderID,SequencePosition,Status,StatusError,TPMR,RelativeValidity,CreatorID) SELECT UpdatedInDB,InsertIntoDB,SendingDateTime,DeliveryDateTime,Text,DestinationNumber,Coding,UDH,SMSCNumber,Class,TextDecoded,ID,SenderID,SequencePosition,Status,StatusError,TPMR,RelativeValidity,CreatorID from smsd.sentitems').
        query('DELETE FROM smsd.sentitems').
        on('result',function(result){
            chain2.commit();
        }).autoCommit(false);
        
        
         var chain3 = trCon.chain();
        chain3.
        on('commit',function(){
            console.log('Commit 87su');
        }).
        on('rollback', function(err){
            console.log(err);
        });
        
        // End Transaction
        
        /*
         Transaction Update Message in sentitems multipart or not
         */
         
        chain3.
        query('UPDATE skala_sms_slave.sentitems b,skala_sms_slave.outbox p SET b.TextDecoded=p.TextDecoded WHERE b.InsertIntoDB=p.InsertIntoDB AND b.DestinationNumber=p.DestinationNumber AND b.UDH=p.UDH').
        query('DELETE FROM skala_sms_slave.outbox').
        on('result',function(result){
            chain3.commit();
        }).autoCommit(false);
        
        
        trCon.end();
        
        }
        //End Transaction
        
    if (data.indexOf('Delivered') !== -1){
    	io.sockets.emit('DeliveryNotify', { Delivery_Rep: 'Delivery_Report' });  
        
        /*
         Transaction Update Delivery Report
         */
         
         var chain4 = trCon.chain();
         chain4.
         query('UPDATE skala_sms_slave.sentitems b,smsd.sentitems p SET b.DeliveryDateTime=p.DeliveryDateTime, b.Status=p.Status WHERE b.InsertIntoDB=p.InsertIntoDB AND b.DestinationNumber=p.DestinationNumber AND b.UDH=p.UDH AND b.ID=p.ID AND b.TPMR=p.TPMR').
         query('DELETE FROM smsd.sentitems').
         on('result',function(result){
            chain4.commit();
         }).autoCommit(false);
         trCon.end();
         }
         //End Transaction
         
         
  	if (data.indexOf('Execute SQL: UPDATE phones') !== -1)
    {
  		io.sockets.emit('StatusConnP2', { Status_RepP2: 'Status_ConnP2' });
     }   
    if(data.indexOf('Disconnecting from SQL database') !== -1){
        io.sockets.emit('StatusDisConnP2', { Status_RepP2: 'Status_DisConnP2' });
        }
});

/*
Auto Start Gammu Services When execute Daemon



var child1 = exec('c:/xampp/htdocs/skala-sms/scripts/bat/gammu-phone1-start.bat', function(err, stdout, stderr) {
   if (err) throw err;
    //else console.log(stdout);
});
var child2 = exec('c:/xampp/htdocs/skala-sms/scripts/bat/gammu-phone2-start.bat', function(err, stdout, stderr) {
   if (err) throw err;
    //else console.log(stdout);
});

*/
