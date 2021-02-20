<?php

use Illuminate\Support\Facades\Route;



Route::get('/menu', function () {
    return view('mainMenu');
});
Route::get('/rmenu', function () {

    return view('ReportMenu');

});

//about
Route::get('/about', function(){
    return view('about');
});

/////////////////Tasks Management/////////////////
Route::get('/subStockMenu', 'SubMenuController@notification');
/*Route::get('/subStockMenu', function () {
    return view('subStockMenu');
});*/
/*Route::get('/reportsSubMenu', function () {
    return view('reportsSubMenu');
});*/

/*Route::get('/item/register', function () {
    $data=App\Item::all();
    return view('item_registration')->with('items',$data);
})->name('item_registration');*/

/*Route::get('/add_item', function () {
    return view('add_newItem');
});*/

Route::post('/saveItem','ItemController@store');
Route::get('/display/items','ItemController@index')->name('item_registration');
Route::get('/editItem/{id}','ItemController@edit');

Route::post('/updateItem/{id}','ItemController@update');

Route::delete('/deleteItem/{id}','ItemController@destroy');

Route::get('/getItemNo','StockItemController@getItemNos');
Route::get('/getItemDetails','StockItemController@getItemDetails');

Route::get('/itemsCharts', 'ItemController@itemsCharts');
Route::get('/itemsBarCharts/{from_date}/{to_date}','ItemController@itemsBarCharts');
Route::get('itemsPieCharts/{from_date}/{to_date}', 'ItemController@itemsPieCharts');
//stock page
/*Route::get('/saveStocksItem', function () {
    $data=App\Stock::all();
    return view('stocks')->with('stocks', $data);
})->name('add_stock');*/


Route::post('/saveStock','StockItemController@store');
Route::get('/display/stocks','StockItemController@index')->name('add_stock');
Route::get('/editStockItems/{id}','StockItemController@edit');
Route::post('/updateStockItems/{id}','StockItemController@update');
Route::delete('/deleteStockItem/{id}','StockItemController@destroy');
Route::get('/searchStocks', 'StockItemController@searchStocks');

Route::get('/stocksCharts', 'StockItemController@stocksCharts');
Route::get('/stocksBarCharts/{from_date}/{to_date}','StockItemController@stocksBarCharts');
Route::get('/stocksPieCharts/{from_date}/{to_date}', 'StockItemController@stocksPieCharts');

Route::get('/GRN/getItemNo', 'GoodsReceiveController@getItemNos');
Route::get('/GRN/getItemDetails', 'GoodsReceiveController@getItemDetails');

Route::get('/GRN/getForeignSupplierNo', 'GoodsReceiveController@getForeignSupplierNos');
Route::get('/getForeignSupplierDetails', 'GoodsReceiveController@getForeignSupplierDetails');

Route::post('/saveReceivedGoods', 'GoodsReceiveController@store');
Route::get('/display/ReceivedGoods', 'GoodsReceiveController@index')->name('receivedGoods');
Route::get('/searchGRNs', 'GoodsReceiveController@searchGRNs');
/*Route::get('/addReceivedGoods', function () {
    return view('goods_receive');
});*/
Route::get('/editReceivedGoods/{id}','GoodsReceiveController@edit');
Route::post('/updateReceivedGoods/{id}','GoodsReceiveController@update');
Route::delete('/deleteReceivedGood/{id}','GoodsReceiveController@destroy');

Route::get('/goodsReceiveCharts', 'GoodsReceiveController@goodsReceiveCharts');
Route::get('/goodsReceiveBarCharts/{from_date}/{to_date}','GoodsReceiveController@goodsReceiveBarCharts');
Route::get('/goodsReceivePieCharts/{from_date}/{to_date}', 'GoodsReceiveController@goodsReceivePieCharts');


Route::get('/GRE/getItemNo', 'GoodsReturnController@getItemNos');
Route::get('/GRE/getItemDetails', 'GoodsReturnController@getItemDetails');

Route::post('/saveReturnGoods', 'GoodsReturnController@store');
Route::get('/display/ReturnGoods', 'GoodsReturnController@index')->name('returnGoods');

/*Route::get('/returnItemNote', function () {
    return view('goods_return');
});*/
Route::get('/editReturnGoods/{id}','GoodsReturnController@edit');
Route::post('/updateReturnGoods/{id}','GoodsReturnController@update');
Route::delete('/deleteReturnGood/{id}','GoodsReturnController@destroy');
Route::get('/searchGREs', 'GoodsReturnController@searchGREs');

Route::get('/goodsReturnCharts', 'GoodsReturnController@goodsReturnCharts');
Route::get('/goodsReturnBarCharts/{from_date}/{to_date}','GoodsReturnController@goodsReturnBarCharts');
Route::get('/goodsReturnPieCharts/{from_date}/{to_date}', 'GoodsReturnController@goodsReturnPieCharts');



Route::get('/search','ItemController@search');
Route::get('/searchResults', function () {
    return view('itemSearchResults');
});
Route::get('/reorderItems/rol', 'StockItemController@rolItems');
Route::get('/reorderItemsSearch/rol', 'StockItemController@rolItemsSearch');
/*Route::get('/rolItems', function () {
    return view('reOrderLevelItems');
});*/
Route::get('/reorderItems/reports', 'StockItemController@rolItemsReportAll');
Route::get('/rolItemsReport/PDF', 'StockItemController@rolStocksReportPDF');

Route::get('/rolItemsCharts', 'StockItemController@rolItemsCharts');
Route::get('/rolItemsBarCharts/','StockItemController@rolItemsBarCharts');
Route::get('/rolItemsPieCharts/', 'StockItemController@rolItemsPieCharts');


Route::get('/itemsReports','ItemController@itemsReportAll');
Route::get('/itemsReports/DateFilter','ItemController@itemsReportAll');
Route::get('/itemsReports/PDF/{from_date}/{to_date}','ItemController@itemsReportPDF');
/*Route::get('/itemsReport1', function () {
    return view('itemsReport_whole');
});*/

Route::get('/stocksReports','StockItemController@stocksReportAll');
Route::get('/stocksReports/DateFilter','StockItemController@stocksReportAll');
Route::get('/stocksReports/PDF/{from_date}/{to_date}','StockItemController@stocksReportPDF');

Route::get('/search/items','StockItemController@searchItems');
/*Route::get('/searchItemsResults', function () {
    return view('stockItems_searchReports');
});*/

Route::get('/searchedStocksReport/PDF/{item_no}','StockItemController@searchedStocksReportPDF');


Route::get('/goodsReturnReports','GoodsReturnController@greReportAll');
Route::get('/goodsReturnReports/DateFilter','GoodsReturnController@greReportAll');
Route::get('/goodsReturnReports/PDF/{from_date}/{to_date}','GoodsReturnController@GoodsReturnPDF');

Route::get('/goodsReturnNotes/Print/PDF/{item_no}/{gre_no}', 'GoodsReturnController@goodsReturnNotesPrintPDF');

Route::get('/goodsReceiveReports','GoodsReceiveController@grnReportAll');
Route::get('/goodsReceiveReports/DateFilter','GoodsReceiveController@grnReportAll');
Route::get('/goodsReceiveReports/PDF/{from_date}/{to_date}','GoodsReceiveController@GoodsReceivePDF');

Route::get('/goodsReceivedNotes/PDF/{item_no}/{grn_no}/{sup_no}','GoodsReceiveController@goodsReceivedNotesPDF');

//Route::get('/notification', 'StockItemController@notification');
/////////////////Tasks Management/////////////////

