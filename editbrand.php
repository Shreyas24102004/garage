<?php include('./constant/layout/head.php');?>
<!--  Author Name- Mayuri K. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at mayuri.infospace@gmail.com  
 Visit website - www.mayurik.com -->

<?php include('./constant/layout/header.php');?>

<?php //include('./constant/layout/sidebar.php');?> 
<?php include('./constant/connect.php');



  $sql="SELECT * from brands where  brand_id='".$_GET['id']."'";
  $result=$connect->query($sql)->fetch_assoc();  ?> 
 
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Edit Brand Management</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Edit Brand</li>
                    </ol>
                </div>
            </div>
            
            
            <!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at mayuri.infospace@gmail.com  
 Visit website : www.mayurik.com -->

<div class="container-fluid">
                
                
                
                
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-title">
                               
                            </div>
                            <div id="add-brand-messages"></div>
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="form-horizontal" method="POST"  id="submitBrandForm" action="php_action/editBrand.php?id=<?php echo $_GET['id'];?>" enctype="multipart/form-data">

                                   <input type="hidden" name="currnt_date" class="form-control">

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Brand Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text"  class="form-control"id="brandName" placeholder="Brand Name" name="brandName" value="<?php echo $result['brand_name']?>" required="" pattern="^[a-zA-z]+$"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Status</label>
                                                <div class="col-sm-9">
                             
                      <select class="form-control" id="brandStatus" name="brandStatus">
                                                        
                                                        <option value="1" <?php 
                                                        if($result['brand_active']=="1") 
                                                            { 
                                                                echo "selected";
                                                            }
                                                        ?>>Available</option>
                                                        <option value="2" <?php if($result['brand_active']=="2"){ echo "selected";}?>>Not Available</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <button type="submit" name="create" id="createBrandBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               


<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at mayuri.infospace@gmail.com  
 Visit website : www.mayurik.com -->
<?php include('./constant/layout/footer.php');?>

