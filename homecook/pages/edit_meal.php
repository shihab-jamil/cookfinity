<?php
    $id = $_GET['id'];
    $details = get_single_table_record('meal', 'id', $id);
?>


<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Edit Meals</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<form method="post" action="./pages/DB/update_meal.php" enctype="multipart/form-data">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">ID</label>
                        <input type="text" name="id" class="form-control" value="<?= $id ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" value="<?= $details['title'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <select name="category" class="select2 form-control" id="" style="width: 100%;" required>
                        <?php 
                            $all_data = get_all_records_from_table('category');  
                            while($data = mysqli_fetch_array($all_data)){
                            ?>
                                <option <?= $data['id']  == $details['category_id'] ? 'selected' : ''  ?> value="<?= $data['id'] ?>"><?= $data['title'] ?></option><?php
                            } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Quantity</label>
                        <input type="number" name="quantity" value="<?= $details['quantity'] ?>"  class="form-control" required>
                        <span id="email_existence"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="number" name="price" class="form-control" value="<?= $details['price'] ?>" required>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Expire Date</label>
                        <input type="date" name="expire_date" min="<?= date('Y-m-d') ?>" value="<?= $details['expire_date'] ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Available From</label>
                                <input type="time" name="available_from" value="<?= $details['available_from'] ?>" class="form-control" required>
                            </div> 
                            <div class="col-md-6">
                                <label for="">Available Till</label>
                                <input type="time" name="available_till" value="<?= $details['available_till'] ?>" class="form-control" required>
                            </div>    
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="file" id="exampleFile2">
                            <label class="custom-file-label" for="exampleFile2">Upload Image</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" class="form-control" rows="4"><?= $details['description'] ?></textarea>
                    </div>
                </div>
                
                <input type="hidden" name="uid" value="<?= $details['uid'] ?>">            
            </div>
        </div>
        <div class="card-footer">
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="cancel('my_meals')">Cancel</button>
                <button id="submit" type="submit" name="submit_item" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</form>