<?php 
    if(@$_GET['page']=='dashboard')
	{
		include "dashboard.php";
    }
    else if(@$_GET['page']=='profil')
	{
		include "profiles.php";
    }
    else if(@$_GET['page']=='tb_menu')
	{
		include "tables/main-menu.php";
    }

    // tb_user
    else if(@$_GET['page']=='tb_user')
	{
		include "tables/user/index.php";
    }
    else if(@$_GET['page']=='tb_user_insert')
	{
		include "tables/user/insert.php";
    }
    else if(@$_GET['page']=='tb_user_edit')
	{
		include "tables/user/edit.php";
    }
    //end tb_user

    // tb_customer
    else if(@$_GET['page']=='tb_customer')
	{
		include "tables/customer/index.php";
    }
    else if(@$_GET['page']=='tb_customer_insert')
	{
		include "tables/customer/insert.php";
    }
    else if(@$_GET['page']=='tb_customer_edit')
	{
		include "tables/customer/edit.php";
    }
    //end tb_customer

    // tb_type
    else if(@$_GET['page']=='tb_type')
	{
		include "tables/type_trans/index.php";
    }
    else if(@$_GET['page']=='tb_type_insert')
	{
		include "tables/type_trans/insert.php";
    }
    else if(@$_GET['page']=='tb_type_edit')
	{
		include "tables/type_trans/edit.php";
    }
    //end tb_type

    // tb_transport
    else if(@$_GET['page']=='tb_transport')
	{
		include "tables/transport/index.php";
    }
    else if(@$_GET['page']=='tb_transport_insert')
	{
		include "tables/transport/insert.php";
    }
    else if(@$_GET['page']=='tb_transport_edit')
	{
		include "tables/transport/edit.php";
    }
    //end tb_transport

    // tb_rute
    else if(@$_GET['page']=='tb_rute')
	{
		include "tables/rute/index.php";
    }
    else if(@$_GET['page']=='tb_rute_insert')
	{
		include "tables/rute/insert.php";
    }
    else if(@$_GET['page']=='tb_rute_edit')
	{
		include "tables/rute/edit.php";
    }
    //end tb_rute

    // tb_reserv
    else if(@$_GET['page']=='tb_reserv')
	{
		include "tables/reservation/index.php";
    }
    else if(@$_GET['page']=='tb_reserv_insert')
	{
		include "tables/reservation/insert.php";
    }
    else if(@$_GET['page']=='tb_reserv_edit')
	{
		include "tables/reservation/edit.php";
    }
    //end tb_reserv
    
    else
	{
		include "dashboard.php";
	}
?>