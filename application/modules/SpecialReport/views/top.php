<li class="hidden-xs m-t-20"><span class="text-white"><b>Report Date : </b></span></li>
<li class="hidden-xs">
    <form role="search" class="app-search">
        <input type="text" placeholder="dd/mm/yyyy" id="iniDate" class="form-control datepicker-autoclose">
    </form>
</li>
<li class="hidden-xs m-t-15" id="IniButton" style="display: <?php if($checkDate['C'] == 0){echo 'block';} else{echo 'none';}?>">
    <button type="submit" class="btn btn-sm btn-primary">Initialize this date</button>
</li>