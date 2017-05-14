<link rel="stylesheet" href="{{url('kendoui/styles/kendo.common.min.css')}}"  />
<link rel="stylesheet" href="{{url('kendoui/styles/kendo.metro.min.css')}}"  />

<script type="text/javascript" src="{{url('kendoui/js/kendo.web.min.js')}}"></script>
<script type="text/javascript">
	function gridDataBound(e) {
        var grid = e.sender;
        if (grid.dataSource.total() == 0) {
            var colCount = grid.columns.length;
            $(e.sender.wrapper)
            .find('tbody')
            .append('<tr class="kendo-data-row"><td colspan="' + colCount + '" class="no-data" style="text-align:center; font-family:Impact, Charcoal, sans-serif; font-size:19px;">There is no data to show in the grid.</td></tr>');
        }
    }
</script>

<?php 
function KendoDropDownArr($arr=array())
{
	$htstr='';
	if(count($arr)!=0)
	{
		foreach ($arr as $fid) {
			$field="'".$fid."'";
			$htstr .='<script>
			            $("select[name='.$field.']").kendoDropDownList({
			                optionLabel: " Please Select  "
			            }).data("kendoDropDownList").select(0);              
			           </script>';
		}
		
	}

	return $htstr;
}
?>
