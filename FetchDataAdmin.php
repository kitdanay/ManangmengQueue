    <?php
    //fetch.php
    require_once("connection.php");
    
    $query = "SELECT * FROM user WHERE ";

    if(isset($_POST["is_category"]))
    {
     $query .= "UserResName = '".$_POST["is_category"]."' AND ";
    }
    if(isset($_POST["search"]["value"]))
    {
     $query .= '(ID LIKE "%'.$_POST["search"]["value"].'%" ';
     $query .= 'OR Username LIKE "%'.$_POST["search"]["value"].'%" ';
     $query .= 'OR Firstname LIKE "%'.$_POST["search"]["value"].'%" ';
     $query .= 'OR Lastname LIKE "%'.$_POST["search"]["value"].'%" ';
     $query .= 'OR UserResName LIKE "%'.$_POST["search"]["value"].'%") ';

     $query .= 'ORDER BY ID ASC ';
    }

    $query1 = '';

    if($_POST["length"] != 0)
    {
     $query1 .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
    }

    $number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));

    $result = mysqli_query($conn, $query . $query1);

    $data = array();

    while($row = mysqli_fetch_array($result))
    {
     $sub_array = array();
     $sub_array[] = $row["Username"];
     $sub_array[] = '********';
     $sub_array[] = $row["Firstname"];
     $sub_array[] = $row["Lastname"];
     $sub_array[] = $row["Tel"];
     $sub_array[] = $row["Userlevel"];
     $sub_array[] = $row["UserResName"];
     $sub_array[] = 'cccc';    
     $data[] = $sub_array;
    }

    function get_all_data($conn)
    {
     $query = "SELECT * FROM user";
     $result = mysqli_query($conn, $query);
     return mysqli_num_rows($result);
    }

    $output = array(
     "draw"    => intval($_POST["draw"]),
     "recordsTotal"  =>  get_all_data($conn),
     "recordsFiltered" => $number_filter_row,
     "data"    => $data
    );

    echo json_encode($output);

    ?>
