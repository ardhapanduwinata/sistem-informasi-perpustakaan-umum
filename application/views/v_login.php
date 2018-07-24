<?php $this->load->view('header&footer/header') ?>
<body>
<?php $this->load->view('header&footer/v_loginHeader') ?>


<div class="container" style="padding-left: 400px; padding-right: 400px">
    <center>
        <?php echo form_open('login/aksi_login');
        echo validation_errors('<div class = "alert alert-danger">', '</div>');
        ?>
        <legend>LOGIN</legend>

        <label>Username</label>
        <input type="text" class="form-control" name="username" value="<?php echo set_value('username');?>" placeholder="Username" autofocus><br>

        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
        <br><br>

        <button type="submit" class="btn btn-primary">Submit</button>
    </center>
</div>
<?php echo form_close(); ?>
<?php $this->load->view('header&footer/v_loginFooter') ?>
<?php $this->load->view('header&footer/footer') ?>