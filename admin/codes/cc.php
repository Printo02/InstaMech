<?php
Class Connectionclass
{
//**********************************   OPEN    **********************************
   public function open()
   {
        $mysql_hostname="localhost";
        $mysql_user="root";
        $mysql_password="";
        $mysql_database="instamech";
        $prefix="";
        $bd=mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die(mysql_error());
        mysql_select_db($mysql_database,$bd) or die("couldn't select databse");
    }
//************************   INSERT    DELETE     UPDATE   ************************
    	public function Manipulation($qry)
		{
			$this->open();
			$response=array();
			try
			{
				$result=mysql_query($qry);
			if($result)
				$response['status']="true";
			else
				throw new Exception(mysql_error());
			}
			catch(Exception $e)
			{
				$response['status']="false";
				$response['message']=$e->getMessage();
			}
			mysql_close();
			return($response);
		}
		
//*********************   GET TABLE    ******************************
		public function GetTable($qry)
		{
			$this->open();
			try
			{
				$result=mysql_query($qry);
				if($result)
				{
					$data=array();
				while(($row=mysql_fetch_array($result,MYSQL_ASSOC))!==false)
				{
					$data[]=$row;
				}
				return $data;
				}
				else
					throw new Exception(mysql_error());
			}
			catch(Exception $e)
			{
				return $e->getMessage();
			}
			mysql_close();
		}
	
//********************   Get Single Data    ******************************
	public function GetSingleData($qry)
	{
			$this->open();
			try
			{
				$result=mysql_query($qry);
				if($result)
				{
					$row=mysql_fetch_row($result);
					return $row[0];
				}
				else
					throw new Exception(mysql_error());
			}
			catch(Exception $e)
			{
				return $e->getMessage();
			}
			mysql_close($con);
	}
	
		
//***************************GET SINGLE ROW  *********************
		public function GetSingleRow($qry)
		{
			$this->open();
			try
			{
				$result=mysql_query($qry);
				if($result)
				{
					$row=mysql_fetch_array($result);
					return $row;
				}
				else
				throw new Exception(mysql_error());
			}
			catch (Exception $e)
			{
				return $e->getMessage();
			}
			mysql_close($con);
		}
		
//**********************ALERT MESSAGE   ******************
		function alert($msg,$url=null)
				{
					echo "   <script type='text/javascript'>
					alert('".$msg."');
					location.href='".$url."';
					</script>";
				}
	  } 
   ?>
