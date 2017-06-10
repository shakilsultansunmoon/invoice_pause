<?php  

$cn=mysql_connect('localhost','root','');  

if ($cn)  

{  

mysql_select_db('invoice_db',$cn);  

}  

if(isset($_POST['save']))  

{  
$order=$_POST['orderid']; 
$name=$_POST['name'];  

$location=$_POST['location'];  

mysql_query("insert into tbl_order(id,name,location) VALUES ('$order','$name','$location')");  





// $order_id     = $_POST['$id'];  
// $product_name = $_POST['$id'];
// $quantity     = $_POST['$id'];
// $price        = $_POST['$id'];
// $discount     = $_POST['$id'];
// $vat          = $_POST['$id'];
// $amount       = $_POST['$id'];


// product_name = '{$_POST['productname'][$i]}',  

// quantity = '{$_POST['quantity'][$i]}',  

// price = '{$_POST['price'][$i]}',  

// discount = '{$_POST['discount'][$i]}', 

// vat = '{$_POST['vat'][$i]}', 

// amount = '{$_POST['amount'][$i]}'");   





// mysql_query("INSERT INTO `tbl_orderdetail`(`id`, `order_id`, `product_name`, `quantity`, `price`, `discount`, `vat`, `amount`) VALUES ('NULL','')");


$id=mysql_insert_id();  



for($i = 0; $i<count($_POST['productname[]']); $i++)  

{  

mysql_query("INSERT INTO tbl_orderdetail  

SET
   
order_id = '{$id}',  

product_name = '{$_POST['productname'][$i]}',  

quantity = '{$_POST['quantity'][$i]}',  

price = '{$_POST['price'][$i]}',  

discount = '{$_POST['discount']}', 

vat = '15%', 

amount = '{$_POST['amount'][$i]}'");   

}  



}   



?>  

    <!DOCTYPE html>  

    <html>  

  

    <head>  

        <title class="no-print"></title>  
        <style type="text/css">
          
          @media print
          {    
             .no-print, .no-print *
              {
                  display: none !important;
              }
          }



          .dash {

                 border: 2px  dashed #000000;
                 border-collapse: collapse
              }

        

        </style>
    </head>  



      

  

            <body style="height: 400px; font-family: serif;">   



                  <script src="//code.jquery.com/jquery-1.12.0.min.js">  

                  </script>  

                  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js">  

                  </script>  

                  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">  
                  <link rel="stylesheet" href="css/style.css">  

                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  

                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  




              <div class="container">
              <div class="row">
              <!--<div class="col-lg-1"></div>-->
               <div class="col-lg-12 col-xs-12" >
                <form action="" method="POST" id="printThisTable">  

                    <div class="box box-primary">  

                        <div class="box-header" >  
                            <div style="text-align:center;">
                              <img src="images/logo.png">
                            </div>
                            <div style="text-align:center;">
                              <span style="font-size: 12px;">RAHMANIA ROOFTOP RESTAURANT & CONVENTION HALL</span><br>
                              <span style="font-size: 12px;">28/1/C Toyenbee Circular Road, Motijheel, 1000 Dhaka, Bangladesh</span><br>
                              <span style="font-size: 12px;">Mobile: +880 18 6850 2960 , Phone: 9587183 </span><br>
                              <span style="font-size: 12px;">www.rahmaniarooftoprestaurant.com</span><br>
                              <span style="color:#4682B4;font-size: 20px; text-align:center;">Invoice</span>
                            </div>
                        </div>  

                        <div class="box-body" style="font-size: 16px;">  

                             <div class="form-group">  
                              <?php date_default_timezone_set("Asia/Dhaka");?>
                               Print Date : <?php echo date("l jS \of F Y h:i:s A") . "<br>"; ?>

                            </div> 

                            <div class="form-group">  
                                Order ID : 

                                <input style="border:black 1px solid;text-align: center;" type="text" name="orderid" >

                                <?php echo "&nbsp &nbsp &nbsp &nbsp"; ?>

                                Table no : 

                                <input style="border:black 1px solid;text-align: center;" type="text" name="location" >  

                                <?php echo "&nbsp &nbsp &nbsp &nbsp"; ?>

                                Waiter Name :

                                <input style="border:black 1px solid;text-align: center;" type="text" name="name" > 

                            </div>

                            <!-- <div class="form-group">  

                                Waiter Name :

                                <input style="border:black 0px solid;" type="text" name="name" >  

                            </div>  --> 
                        </div>  
                     
                        <input type="submit" style="border:black 0px solid;" class="btn btn-primary no-print" name="save"  id="save" value="Print"> 

                    </div>

                    <br/>  


                    <div style="text-align: center;">
                    <span style="font-size: 25px;">---------------------Order Information---------------------</span><br>
                    </div>
                    <br/> 
                    <table class="table">  

                      <thead> 

                      
                        	  <th style="border-bottom: 2px dashed #000000;border-top: 2px dashed #000000;" class="no-print"></th>

                            <th style="text-align:center;border-bottom: 2px dashed #000000;border-top: 2px dashed #000000;" >No</th> 

                            <th style="text-align:center;border-bottom: 2px dashed #000000;border-top: 2px dashed #000000;"  class="no-print">Product ID</th>  

                            <th style="text-align:center;border-bottom: 2px dashed #000000;border-top: 2px dashed #000000;" >Product Name</th>  

                            <th style="text-align:center;border-bottom: 2px dashed #000000;border-top: 2px dashed #000000;">Quantity</th>  

                            <th style="text-align:center;border-bottom: 2px dashed #000000;border-top: 2px dashed #000000;">Price</th>  

                            <th style="text-align:center;border-bottom: 2px dashed #000000;border-top: 2px dashed #000000;">Amount</th>  
                         
                            <th style="border-bottom: 2px dashed #000000;border-top: 2px dashed #000000;" class="no-print"><input type="button" value="+" id="add" class="btn btn-primary"></th>  
                           
                        </thead>  

                       <tbody class="detail dash">  

                            <tr class="dash">  
                                <td class="no-print"><a href="#" class="remove"><span class="glyphicon glyphicon-remove"></span></td>  

                                <td class="no">1</td>  

                                <td class="no-print" style="width: 10px;"><input type="text" class="form-control product-id"  style="text-align: center;border:black 0px solid;" name="product-id[]" id="product-id"></td> 

                                <!--<td><textarea style="height: 70px;" readonly=readonly type="text" name="productname[]" id="product-name" ></textarea></td>-->

                                <td style="width: 20%; height: 150%"><p type="text" class="form-control productname" style=" text-align: center;border:black 0px solid; height: 150%;" name="productname" id="product-name"></p></td> 

                                <td style="width: 10px;"><input type="text" class="form-control quantity"  style="text-align: center;border:black 0px solid;" name="quantity[]"></td>  

                                <td style="width: 25%;"><input type="text" class="form-control price"  style="text-align: center;border:black 0px solid;" name="price[]" id="product-price"></td>  

                                <td><input type="text" class="form-control amount"  style="text-align: center;border:black 0px solid;" name="amount[]"></td>  

                              
                              </tr>  

                      </tbody>    

                      <tfoot>
                              <tr class="dash">
                                <th class="no-print"></th>
                                <th class="no-print"></th>
                              	<th colspan="4" style="text-align:right;">Sub Total:</th>  
                              	<th style="text-align:center;" class="sub-total"><b>0</b></th>
                              </tr>


                              <tr class="dash">
                                <th class="no-print"></th>
                                <th class="no-print"></th>
                              	<th colspan="4" style="text-align:right;">VAT:</th>  
                              	<th style="text-align:center;"><b>15%</b></th>
                              </tr>


                              <tr class="dash">
                                <th class="no-print"></th>
                                <th class="no-print"></th>
                              	<th colspan="4" style="text-align:right;">Total:</th>  
                              	<th style="text-align:center;" class="total"><b>0</b></th>
                              </tr>


                              <tr class="discount-tr" >
                                <th class="no-print"></th>
                                <th class="no-print"></th>
                              	<th colspan="4" style="text-align:right;">Discount:</th>  
                              	<th style="text-align:center;"><input type="text" class="form-control input-sm" name="discount" id="discount" style="text-align: center;"></th>
                              </tr>


                              <tr class="dash">
                                <th class="no-print"></th>
                                <th class="no-print"></th>
                              	<th colspan="4" style="text-align:right;">Total Amount:</th>  
                              	<th style="text-align:center;" class="total-amount">0</th>
                              </tr> 


                                <tr class="dash">
                                  <th class="no-print"></th>
                                  <th class="no-print"></th>
                                  <th colspan="4" style="text-align:right;">You've Served by:</th>  
                                  <th style="text-align:center;" ><input type="text" class="form-control" name="srved_name" id="srved_name" style="text-align: center;border:black 0px solid;"></th>
                              </tr>

                              <tr class="dash">
                                  <th class="no-print"></th>
                                  <th class="no-print"></th>
                                  <th colspan="5" style="text-align:center;">Thanks Come Again</th>
                                  <th class="no-print"></th>
                              </tr>

                               <tr class="dash">
                                  <th class="no-print"></th>
                                  <th class="no-print"></th>
                                  <th colspan="5" style="text-align:center;">Developed By:<a href="www.bfastit.com">B-Fast IT Limited</a></th>
                                  <th class="no-print"></th>
                              </tr>
                   
                   
                      </tfoot> 

                      </table>  

              </form>
              </div>
              <!--<div class="col-lg-1"></div>-->
              </div> 
            </div>
            


<!--<div class="container-fluid" style="margin-top: 200px; background: #000000">-->
<!--    <div class="row">-->
<!--        <h5 style="color:#F0FFFF" class="text-center">Copyright © RAHMANIA ROOFTOP RESTAURANT & CONVENTION HALL </h5>-->
<!--        <h5 style="color:#F0FFFF" class="text-center">DEVELOPED By : B-Fast-IT Ltd. </h5>-->
        
<!--    </div>-->
    
<!--</div>-->

</body>  

</html>  

<script type="text/javascript">  

$(function()  

{  

    $('#add').click(function()  

    {  

    addnewrow();  

    });  

    

    $('body').delegate('.remove','click',function()  

    {  

    $(this).parent().parent().remove();
     
    total();

    });  



    $('body').delegate('.quantity,.price,.discount,.vat','keyup',function()  

    {  

    var tr=$(this).parent().parent();  

    var qty=tr.find('.quantity').val();  

    var price=tr.find('.price').val(); 

    var dis=tr.find('.discount').val();  

    var vat=tr.find('.vat').val();

    var amt =(qty * price);

    tr.find('.amount').val(amt);  

    total();  

    });  

});  

function total()  

{  

var t=0;  

$('.amount').each(function(i,e)   

{  

var amt = $(this).val()-0;  

 t+=amt;  

});



 vat = (t*0.15);
 t2 = (t+vat);


if(typeof t2 === 'number'){
           if(parseInt(t2)==t2){
              t2 = t2;
              
           } else{
                    var floatnum = (t2/parseInt(t2));
                   
                    if(floatnum > 0.5){
                    t2 = Math.ceil(t2);
                    $('.total').html(t2); 
                    } else{
                    t2 = Math.floor(t2);
                    $('.total').html(t2); 
                    }

                }
  }
  
  
  
  $('.sub-total').html(t);
  $('.total').html(t2);
}



   

function addnewrow()   

{

var n=($('.detail tr').length-0)+1;  

var tr = '<tr class="dash">'+  

'<td class="no-print"><a href="#" class="remove"><span class="glyphicon glyphicon-remove"></span></td>'+  

'<td class="no">'+n+'</td>'+  

'<td class="no-print"><input type="text" class="form-control product-id"  style="text-align: center; border:black 0px solid;"name="product-id[]" id="product-id'+n+'"></td>'+  

//  '<td><textarea style="height: 70px;" readonly=readonly type="text" name="productname[]" id="product-name'+n+'"></textarea></td>'+


'<td><p type="text" class="form-control productname" style=" text-align: center;border:black 0px solid; height: 150%;" name="productname" id="product-name'+n+'"></p></td>'+  

'<td><input type="text" class="form-control quantity"  style="text-align: center;border:black 0px solid;" name="quantity[]"></td>'+  

'<td style="width: 40%;"><input type="text" class="form-control price"  style="text-align: center;border:black 0px solid;" name="price[]" id="product-price'+n+'"></td>'+  

'<td><input type="text" class="form-control amount"  style="text-align: center;border:black 0px solid;" name="amount[]"></td>'+  


'</tr>';  



$(document).on('keyup', '#product-id'+n+'', function(){
	var id = this.value
	$.ajax({
		url: 'ajax-display-product-details.php',
		type: 'POST',
		data: {id : id},
		dataType: 'json',
		success: function(response){
			$('#product-name'+n+'').html(response.name)
			$('#product-price'+n+'').val(response.price)
		}
	})
})
$('.detail').append(tr);   

}  

$(document).on('keyup', '#product-id', function(){
	var id = this.value
	$.ajax({
		url: 'ajax-display-product-details.php',
		type: 'POST',
		data: {id : id},
		dataType: 'json',
		success: function(response){
			$('#product-name').html(response.name)
			$('#product-price').val(response.price)
		}
	})
});

$(document).on('keyup', '#discount', function(){
	var tot = Number($('.total').text())
	var discount = this.value
	if((tot > 0) && (discount > 0) && (discount < tot)){
		$('.total-amount').html(tot-discount)
	}else{
		$('.total-amount').html(tot)
	}
})

$("#save").click(function () {

    print();

});

</script>

