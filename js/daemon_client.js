
var socket = io.connect('http://localhost:8000/');


socket.on('InboxNotify', function (data) {
    if(data.Inbox_Rep == 'Inbox_Update') {
        $.fn.yiiGridView.update("inbox-slave-grid");
        $.pnotify({
	        title: 'Notifikasi',
	        text: 'Ada Pesan baru',
	        sticker : false,
	        animation: 'slide',
	        opacity: 0.9,
	        delay: 10000,
	        icon: true
	    });
        
                
    }
});

socket.on('DeliveryNotify', function (data) {
    if(data.Delivery_Rep=='Delivery_Report') {
        $.fn.yiiGridView.update("sentitems-slave-grid");
        $.pnotify({
	        title: 'Notifikasi',
	        text: 'SMS telah terkirim.',
	        sticker : false,
	        animation: 'slide',
	        opacity: 0.9,
	        delay: 10000,
	        type : 'success',
	        icon:true
	    });
    }
});

socket.on('SentNotify', function (data) {
    if(data.Sent_Rep=='Sent_Report') {
        $.fn.yiiGridView.update("outbox-slave-grid");
        $.fn.yiiGridView.update("sentitems-slave-grid");
    }
});



/*
Phone 1 Vodafone

*/

function myConnect350961683277007()
{
    socket.emit('Connect_Phone_1', {Con_Phone1_Rep: 'Connect_P1'});
    $('#status350961683277007').text('Please Wait...');
}

    socket.on('Con_Phone1', function (data) {
    console.log('Phone 1 Connected');
    $.fn.yiiListView.update('gammu-service-list');
});


function myDisconnect350961683277007()
{
    socket.emit('Disconnect_Phone_1', {Dis_Phone1_Rep: 'Disconnect_P1'});
    $('#status350961683277007').text('Please Wait...');
}

    socket.on('Dis_Phone1', function (data) {
    console.log('Phone 1 Disconnect');
    $.fn.yiiListView.update('gammu-service-list');
});

socket.on('StatusConnP1', function (data) {
    if(data.Status_RepP1=='Status_ConnP1')
    {
        var statusConnec = 'Connected';
        $("#gammu-status").text(statusConnec);
        $.fn.yiiListView.update('gammu-service-list');
    }
});


socket.on('StatusDisConnP1', function (data) {
    //console.log(data.Sent_Rep);
    if(data.Status_RepP1=='Status_DisConnP1')
    {
        var statusConnec = 'Disconnected';
        $("#gammu-status").text(statusConnec);
        $.fn.yiiListView.update('gammu-service-list');
    }
});

/*
Phone 2 Wavecom

*/
function myConnect358191012234923()
{
    socket.emit('Connect_Phone_2', {Con_Phone2_Rep: 'Connect_P2'});
    $('#status358191012234923').text('Please Wait...');
}
    socket.on('Con_Phone2', function (data) {
    console.log('Phone 2 Connect');
    $.fn.yiiListView.update('gammu-service-list');
  });
  
function myDisconnect358191012234923()
{
    socket.emit('Disconnect_Phone_2', {Dis_Phone2_Rep: 'Disconnect_P2'});
    $('#status358191012234923').text('Please Wait...');
}
    socket.on('Dis_Phone2', function (data) {
    console.log('Phone 2 Disconnect');
    $.fn.yiiListView.update('gammu-service-list');
  });
  
socket.on('StatusConnP2', function (data) {
    if(data.Status_RepP2=='Status_ConnP2')
    {
        var statusConnec = 'Connected';
        $("#gammu-status").text(statusConnec);
        $.fn.yiiListView.update('gammu-service-list');
    }
});


socket.on('StatusDisConnP2', function (data) {
    //console.log(data.Sent_Rep);
    if(data.Status_RepP2=='Status_DisConnP2')
    {
        var statusConnec = 'Disconnected';
        $("#gammu-status").text(statusConnec);
        $.fn.yiiListView.update('gammu-service-list');
    }
});  
/*
For Connection SSL Mode
var sockets = io.connect('https://localhost:8080/',{secure:true});
sockets.on('Inbox', function (data) {
    console.log(data.hello);
    if(data.hello=='Ada_Pesan_Tuh')
    {
        console.log('Terkoneksi');
    }
});
*/


