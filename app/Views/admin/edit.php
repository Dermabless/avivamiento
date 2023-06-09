<div class="main-container">
  <div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
      <div class="page-header">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="title">
              <h4>Admin Users</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Edit Admin Details</li>
              </ol>
            </nav>
          </div>

        </div>
      </div>
      <!-- Default Basic Forms Start -->
      <div class="pd-20 card-box mb-30">
        <div class="pd-20 card-box mb-30">
          <?php if (session()->getFlashdata('success') !== NULL) : ?>
              <div class='alert alert-success mt-2'>
                  <?php echo session()->getFlashdata('success'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
          <?php endif; ?>
          <?php if (session()->getFlashdata('error') !== NULL) : ?>
              <div class='alert alert-danger mt-2'>
                  <?php echo session()->getFlashdata('error'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
          <?php endif; ?>

        <form autocomplete="off" method="POST" action="<?php echo base_url(); ?>/editadmindata" style="margin-top:30px;">
          <input type="hidden" class="form-control" name="id" required="" autofocus="" value="<?php echo $admin->id; ?>">
          <div class="form-group">
              <label>Full Name</label>

              <div class="form-line">
                  <input value="<?php echo $admin->fullname; ?>" type="text" class="form-control" name="name" placeholder="Full Name" required="" autofocus="">
              </div>
          </div>
            <div class="form-group">
                <label>Email Address</label>

                <div class="form-line">
                    <input value="<?php echo $admin->email; ?>" type="email" class="form-control" name="email" placeholder="Email Address" required="" autofocus="">
                </div>
            </div>
            <div class="form-group">
                <label>Password</label>
                <div class="form-line">
                    <input type="password" class="form-control" name="password" placeholder="" value="" autocomplete="new-password">
                </div>
            </div>

            <div class="form-group" style="display:none;">
                <div class="form-line">
                  <label>Church Branch (User will be admin for selected church)</label>
                  <select class="form-control" name="branch">
                    <?php foreach ($branches as $res) { ?>
                      <option value="<?php echo $res->id; ?>" <?php echo $admin->branch==$res->id?"selected":""; ?>><?php echo $res->name; ?></option>
                    <?php  } ?>
                  </select>
                </div>
            </div>

          <div class="box-footer text-center">
             <button class="btn btn-primary waves-effect" type="submit">UPDATE DETAILS</button>
          </div>

        </form>


      </div>
    </div>

  </div>
</div>
