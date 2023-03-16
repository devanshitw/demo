<?php $this->view("admin/header",$data); ?>

<?php $this->view("admin/sidebar",$data); ?>
<style type="text/css">
		
		.add_new{

			width: 500px;
			height:300px;
			background-color: #eae8e8;
			box-shadow: 0px 0px 10px #aaa;
			position: absolute;
			padding: 6px;
		}

		.edit_category{

			width: 500px;
			height:300px;
			background-color: #eae8e8;
			box-shadow: 0px 0px 10px #aaa;
			position: absolute;
			padding: 6px;
		}



		.show{
			display: block;
 		}

 		.hide{
			display: none;
 		}



	</style>
    
<?php $this->view("admin/footer",$data); ?>