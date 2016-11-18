<div class="box-typical box-typical-padding">

    <h5 class="m-t-lg with-border">Main Info</h5>
    <form action="<?php echo base_url('admin')?>" method="post">
        <div class="row">
            <div class="col-lg-4">
                <fieldset class="form-group"> <!-- user name -->
                    <label class="form-label semibold" for="exampleInput">First Name</label>
                    <input type="text" class="form-control" id="exampleInput" name="name" value="<?php echo $data['data']['user_data'][0]['user'];?>">
                    <small class="text-muted">Type your full name ex. John Smith</small>
                </fieldset>
            </div>
            <div class="col-lg-4">
                <fieldset class="form-group"> <!-- profession -->
                    <label class="form-label semibold" for="exampleInput">Proffesion</label>
                    <input type="text" class="form-control" id="exampleInput" name="profession" value="">
                    <small class="text-muted">Type your Proffesion ex. Businessman</small>
                </fieldset>
            </div>
            <div class="col-lg-4">
                <fieldset class="form-group"> <!-- address -->
                    <label class="form-label semibold" for="exampleInput">Adress</label>
                    <input type="text" class="form-control" id="exampleInput" name="address" value="">
                    <small class="text-muted">Type your Address ex. Tbilisi</small>
                </fieldset>
            </div>
            <div class="col-lg-4">
                <fieldset class="form-group"> <!-- nationality -->
                    <label class="form-label semibold" for="exampleInput">Nationality</label>
                    <input type="text" class="form-control" id="exampleInput" name="nationality" value="">
                    <small class="text-muted">Type your Nationality ex. Citizen of Georgia</small>
                </fieldset>
            </div>
            <div class="col-lg-4">
                <fieldset class="form-group"> <!-- phone -->
                    <label class="form-label semibold" for="exampleInput">Phone</label>
                    <input type="text" class="form-control" id="exampleInput" name="phone" value="">
                    <small class="text-muted">Type your Phone ex. 579 *** **8</small>
                </fieldset>
            </div>
            <div class="col-lg-4">
                <fieldset class="form-group"> <!-- email -->
                    <label class="form-label semibold" for="exampleInput">Email</label>
                    <input type="email" class="form-control" id="exampleInput" name="email" value="">
                    <small class="text-muted">Type your Email ex. youremail@gmail.com</small>
                </fieldset>
            </div>
            <div class="col-lg-4">
                <fieldset class="form-group"> <!-- birth date -->
                    <label class="form-label semibold" for="date-mask-input">Date</label>
                    <input type="text" class="form-control" id="date-mask-input" placeholder="__/__/____" name="birth" value="">
                    <small class="text-muted">Date mask input: 00/00/0000</small>
                </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <fieldset class="form-group"> <!-- info -->
                    <label class="form-label semibold" for="date-mask-input">Info</label>
                    <textarea rows="4" class="form-control" name="info" value=""></textarea>
                    <small class="text-muted">Type about your</small>
                </fieldset>
            </div>
            <div class="col-md-8">
                <div class="col-md-6 no-padding">
                    <div class="proj-page">
                        <div class="drop-zone"> <!-- cover image -->
                            <i class="font-icon font-icon-cloud-upload-2"></i>
                            <div class="drop-zone-caption">Drag Cover Photo to upload</div>
                            <span class="btn btn-rounded btn-file">
                            <span>Choose file</span>
                            <input type="file" name="files[]" multiple="">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 no-padding">
                    <div class="proj-page">
                        <div class="drop-zone"> <!-- profile image -->
                            <i class="font-icon font-icon-cloud-upload-2"></i>
                            <div class="drop-zone-caption">Drag Profile Photo to upload</div>
                            <span class="btn btn-rounded btn-file">
                            <span>Choose file</span>
                            <input type="file" name="files[]" multiple="">
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-8">
                <button type="submit" class="btn btn-inline btn-success">Save</button>
            </div>
        </div>
    </form>
</div>