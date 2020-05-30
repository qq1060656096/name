/**
 * Created by wlq on 2017-12-10.
 */
var dataread='';
var localbbh='';
function get_data(){
    if(localStorage['qm_order'+localbbh]!==undefined && localStorage['qm_order'+localbbh]!==""){
        try{
            dataread=JSON.parse(localStorage['qm_order'+localbbh]);
            if(typeof dataread=='object'){
                var str_order='';
                for(var i in dataread){
                    str_order+=(str_order==''?dataread[i]['order_id']:(','+dataread[i]['order_id']));
                }
                localStorage['qm_order'+localbbh]=str_order;
            }
            dataread=str_order;
        }catch (error){
            dataread=localStorage['qm_order'+localbbh];
        }
    }
}
function set_data(val){
    get_data();
    if(val!=undefined&&val!="undefined"){
        if(dataread.indexOf(val)==-1){dataread+=(dataread==''?val:(','+val));}
    }
}
function save_data(){
    localStorage['qm_order'+localbbh]=dataread;
}
function del_data(key) {
    var arr=dataread.split(',');
    dataread='';
    for (var i in arr){
        if(key!=arr[i]){dataread+=((dataread?',':'')+arr[i]);}
    }
    save_data();
}

var data_result={};
function get_collect(key){
    if(localStorage[key+localbbh]!==undefined && localStorage[key+localbbh]!==""){
        data_result=JSON.parse(localStorage[key+localbbh]);
    }
}
function set_collect(key,k,val,i){
    get_collect(i);
    if(key!=undefined&&key!="undefined"){
        if(data_result[key]===undefined){
            data_result[key]={};
        }
        data_result[key][k]=val;
    }
}
function  save_collect(key) {
    localStorage[key+localbbh]=JSON.stringify(data_result);
}
function del_collect(key,name,i) {
    delete data_result[key][name];
    save_collect(i);
}