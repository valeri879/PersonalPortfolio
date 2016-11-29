<?php $this->load->view('admin/includes/header'); 		// page header ?>
    
<div class="box-typical box-typical-padding">
    <form action="<?php echo base_url('admin/education')?>" method="post">
        <h5 class="m-t-lg with-border">Education</h5>
        <div class="row">
            <div class="col-lg-4 no-padding">
                <div class="col-md-6">
                    <fieldset class="form-group">
                        <label class="form-label semibold" for="exampleInput">From</label>
                        <input type="text" class="form-control" name="from_year" value="<?php echo $result['from_year'];?>">
                        <small class="text-muted">Type your full name ex. 20**</small>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset class="form-group">
                        <label class="form-label semibold" for="exampleInput">To</label>
                        <input type="text" class="form-control" name="to_year" value="<?php echo $result['to_year'];?>">
                        <small class="text-muted">Type your full name ex. 20**</small>
                    </fieldset>
                </div>
            </div>
            <div class="col-lg-4">
                <fieldset class="form-group">
                    <label class="form-label semibold" for="exampleInput">School Name</label>
                    <input type="text" class="form-control" name="title" value="<?php echo $result['title'];?>">
                    <small class="text-muted">Type your full name ex. John Smith</small>
                </fieldset>
            </div>
            <div class="col-lg-4">
                <fieldset class="form-group">
                    <label class="form-label semibold" for="exampleInput">Type</label>
                    <input type="text" class="form-control" name="school" value="<?php echo $result['school'];?>">
                    <small class="text-muted">Type your full name ex. John Smith</small>
                </fieldset>
            </div>
        
        </div>
        <div class="row">
            <div class="col-md-8">
                <fieldset class="form-group">
                    <label class="form-label semibold" for="exampleInput">Info</label>
                    <textarea type="text" rows="4" class="form-control" name="description"><?php echo $result['description'];?></textarea>
                    <small class="text-muted">Type your full name ex. John Smith</small>
                </fieldset>
            </div>
            <div class="col-md-8">
                <button type="submit" name="submit" class="btn btn-inline btn-success">Save</button>
                <button type="button" class="btn btn-inline">Add more + 1</button>
                <button type="button" class="btn btn-inline btn-danger">Delete</button>
            </div>
        </div>
    </form>
</div> 

<?php  $this->load->view('admin/includes/footer');			// page footer?>   

