<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<div id="layoutsisfo">
<div id="layoutsisfotable">System Information</div>


<?php $this->widget('zii.widgets.CListView', array(
    'id'=>'gammu-service-list',
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'template'=>"{items}",
)); ?>

<div id="kolomkecil"></div>
<div id="container" style="margin: 0 auto">
<?php

        $this->Widget('ext.ActiveHighcharts.HighchartsWidget', array(
        'id'=>'sms_chart',
        'dataProvider'=>$dataProviderChart,
        'template'=>"{items}",
        'options'=> array(
            'chart'=>array(
                'animation'=>false,
                'plotBorderWidth'=>'0',
                'height'=>'250',
            ),
            'title'=>array(
                'text'=>'SMS Log'
            ),
            'xAxis'=>array(
                // It cant be 1.a self-defined xAxis array as you want; 
                // 2.a series from datebase such as time series
                'categories'=>'sms_date',
                'gridLineWidth'=>'1',         
            ),
            'credits'=>array(
                'enabled'=>false,         
            ),
            'yAxis'=>array(
                'title'=>'null',
                'lineWidth'=>'5',
            ),
            'series'=>array(
                array(
                    'type'=>'line',
                    'name'=>'Out SMS',
                    'dataResource'=>'out_sms_count',
           //title of data
                ),
                array(
                    'type'=>'line',
                    'name'=>'In SMS',
                    'dataResource'=>'in_sms_count',
                     //title of data    //data resource according to datebase column
                ),
            )
        )
    ));
        $chart_id='sms_chart';
     $refresh_button = $this->widget('zii.widgets.jui.CJuiButton', array(
        'buttonType'=>'button',
        'name'=>'refresh',
        'caption'=>'Refresh',
        'options'=>array(
        ),
        'onclick'=>'js:function(){
            url = window.location.href;
            $.fn.highchartsview.update("sms_chart", url);
       }'
    ));
        
    
?>


</div>
</div>