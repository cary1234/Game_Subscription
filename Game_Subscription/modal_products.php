<script language="JavaScript" type="text/javascript">
function check(){
    var a=document.forms["abc"]["new_category"].value;
		if ((a==null || a==""))
		{
			alert("Please Type A New Category Or Choose One From The List");
			return false;
		}
}
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        	<form name="abc" action="products_add.php" method="POST">
        		<div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Add Products</h4>
                </div>
                <div class="container-fluid">
                    <div class="col-lg-6 pull-left">
					<br>
                        <div>
                            <div>Product Name:</div>
                            <input required class="form-control" type="text" name="product_name">
                        </div>
                        <div>
                            <div>Product Code:</div>
                            <input class="form-control" required size="30" type="text" name="product_code">
                        </div>
                        <div>
                            <div>Product Description:</div>
                            <textarea class="form-control" name='product_description' required cols="32" rows="3"></textarea>
                        </div>
                        <div>
                            <div>Product Dimension:</div>
                            <input class="form-control" required size="30" type="text" name="product_dimension">
                        </div>
                    </div>
                    <div class="col-lg-6 pull-left">
					<br>
                        <div>
                            <div>Product Stock:</div>
                            <input required class="form-control" size="30" type="text" name="product_stock">
                        </div>               		
                        <div>
                            <div>Product Price:</div>
                            <input class="form-control" required size="30" type="text" name="product_price">
                        </div>
                        <div>
                            <div>Product Paypal:</div>
                            <textarea class="form-control" name='product_paypal' cols="32" required rows="3"></textarea>
                        </div>
                        <div>
                            <div>
                                Product Category:
                            </div>     
                            <select required name="product_category" id="product_category" class="form-control">
								<option value="">Please Select</option><?php
								$query = "SELECT category FROM item_category";
								$result = mysqli_query($db_link, $query);
								while($row = mysqli_fetch_array($result)){?>
									<option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option><?php
								}?>
								<option value="Others">Others</option>
                            </select>
                        </div>
						
						<br>
						
						<div id="Others">
							<span class="input-group input-group-btn">
								<input name="new_category"id="new_category" type="text" 
								class="form-control" placeholder="New Category" />
							</span>
						</div>
                    
					</div>
            	</div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="style" onclick="return check()" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
 
 <script>
	$(function() {
		$('#Others').hide();
		$('#new_category').val('hide');
		$('#product_category').change(function(){
			var selected = $(this).val();
			if(selected == 'Others'){
				$('#Others').show();
				$('#new_category').val('');
			}
			else{
				$('#Others').hide();
				$('#new_category').val('hide');
			}
		});
	});
 </script>