<?php
libxml_use_internal_errors(true);
$xml_error = false;
if (($_POST['first_name']) <> '' && isset($_POST['last_name']) <> '') {
	$feedUrl = 'http://www.infopay.com/phptest.php?username=accucomtest&password=test104&firstname='.$_POST['first_name'].
				'&middle_initial=&lastname='.$_POST['last_name'].'&city=&state'.$_POST['state'].'=ma&zip=&client_reference=test&phone=&housenumber=&streetname=';
	$rawFeed = file_get_contents($feedUrl);
	$sxe = simplexml_load_string($rawFeed);
	if ($sxe === false) {
	    $xml_error = true;
	} else {
		$xml = new SimpleXmlElement($rawFeed);
		$record = array();
		$id = 1;
		if ($xml) {
			foreach ($xml->recordset->record as $item)
			{   
			    $record['id'] = $id;
			    $record['firstname'] = $item->firstname;
			    $record['lastname'] = $item->lastname;
			    $record['middlename'] = $item->middlename;
			    $record['dob'] = $item->dob;
			    $record['age'] = $item->age;
			    $record['address'] = $item->address;
			    $record['city'] = $item->city;
			    $record['state'] = $item->state;
			    $record['zip'] = $item->zip;
			    $record['reportdate'] = $item->reportdate;
			    $record['phone'] = $item->phone;
			    $record['previous_addresses'] = $item->previous_addresses;
			    $record['home_owner'] = $item->home_owner;
			    $id++;
			    $records[] = $record;
			}
		}
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  	<head>
    	<title>Humitech</title>
    	<style type="text/css">
		<!--
		@import url("style.css");
		-->
		</style>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" />
		  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script>
		  $(function() {
		    $('table a').click(function(e) {
			    	var id = $(this).attr('id');
					$('#' + id + 'link').dialog();
			    });
		  });
		  </script>
	</head>
  	<body>
  		<div style="margin: 50px auto 20px;">
  			<div style="margin: 0 auto; max-width: 500px; height:500px; overflow-y: scroll; overflow-x: hidden;">
	  			<table id="hor-minimalist-a" summary="Employee Pay Sheet">
				    <thead>
				    	<tr>
						    <th>First Name</th>
						    <th>Last Name</th>
						    <th>State</th>
						    <th></th>
						  </tr>
				    </thead>
				    <tbody>
				    	
				    	<?php 
				    		if (isset($records)) {
				    			foreach ($records as $record) { 
							    	?>
							    	<tr>
							            <?php echo "<td>" . $record['firstname'] . "</td>";?>
							            <?php echo "<td>" . $record['lastname'] . "</td>";?>
							            <?php echo "<td>" . $record['state'] . "</td>";?>
							            <td>
							            	<a id="<?php echo $record['id'];?>" href="#" class="link">View Details</a>
							            	<div id="<?php echo $record['id'];?>link" style="display:none; font-size: 12px; color: #669;">
											    <p>
											    Date of Birth: <?php echo $record['dob']?><br/>
											    Age: <?php echo $record['age']?><br/>
											    Address: <?php echo $record['address']?><br/>
											    City: <?php echo $record['city']?><br/>
											    State: <?php echo $record['state']?><br/>
											    Zip Code: <?php echo $record['zip']?><br/>
											    Previous Home Address: <?php echo $record['zip']?><br/>
											    </p>
											</div>
						            	</td>
							        </tr>
							        <?php 
				    			}
				    		}  else {
				    			if ($xml_error) {
				    				echo "Failed loading XML\n";
				    			} else {
				    				echo "There is no record to diplay";
				    			}
				    		}
				        ?>
				    </tbody>
				</table>
			</div>
		</div>
	</body>
</html>
