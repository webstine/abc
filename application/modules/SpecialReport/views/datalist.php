<!--******************************************FIR DATALIST********************************************-->
<?php 
    if($method =='fir'){
        $i = 1;
        foreach ($res as $key => $val) { 
?>
    <tr>
        <td><?php echo $val['REPDATE']; ?></td>
        <td><?php echo $val['CASENO']; ?></td>
        <td><?php echo $val['CASEDATE']; ?></td>
        <td><?php echo $val['COMPLAINANT']; ?></td>
        <td>
            <input type="checkbox" id="switch<?php echo $i; ?>" class="mySwitch" data-switch="primary" checked/>
            <label for="switch<?php echo $i; ?>" data-on-label="Yes" data-off-label="No">
            </label>
        </td>
        <td>
            <input type="checkbox" id="switch<?php echo $i*100; ?>" class="mySwitch" data-switch="primary" checked/>
            <label for="switch<?php echo $i*100; ?>" data-on-label="Yes" data-off-label="No">
            </label>
        </td>
        <td>
            <a href="" class="btn btn-xs btn-warning btn-rounded"> <i class="glyphicon glyphicon-edit text-white f15"> </i></a>
            <a href="" class="btn btn-xs btn-success btn-rounded"><i class="glyphicon glyphicon-cloud-upload text-white f15"> </i></a>
            <a href="" class="btn btn-xs btn-primary btn-rounded"> <i class="glyphicon glyphicon-eye-open text-white f15"> </i></a>
            <a href="" class="btn btn-xs btn-danger btn-rounded"> <i class="glyphicon glyphicon-trash text-white f15"> </i></a>
        </td>
    </tr>
<?php
        $i++;
        }
    }
?>

<?php if(count($res) == 0){ ?>
    <tr>
        <td colspan="7"><h3><b>No Data Available</b></h3></td>
    </tr>
<?php } ?>