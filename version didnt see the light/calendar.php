<style>
	table.calendar      { border-left:1px solid #999; }
	tr.calendar-row {  }
	td.calendar-day { min-height:80px; font-size:11px; position:relative; } * html div.calendar-day { height:80px; }
	td.calendar-day:hover   { background:#eceff5; }
	td.calendar-day-np  { background:#eee; min-height:80px; } * html div.calendar-day-np { height:80px; }
	td.calendar-day-head { background:#ccc; font-weight:bold; text-align:center; width:120px; padding:5px; border-bottom:1px solid #999; border-top:1px solid #999; border-right:1px solid #999; }
	div.day-number      { background:#999; padding:5px; color:#fff; font-weight:bold; float:right; margin:-5px -5px 0 0; width:20px; text-align:center; }
	/* shared */
	td.calendar-day, td.calendar-day-np { width:120px; padding:5px; border-bottom:1px solid #999; border-right:1px solid #999; }
</style>

<?php
$currentYear1 = 2017;
$currentYear2 = 2018;
/* draws a calendar */
function draw_calendar($month,$year){

	/* draw table */
	$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

	/* table headings */
	$headings = array('SUN','MON','TUE','WED','THU','FRI','SAT');
	$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

	/* days and weeks vars now ... */
	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();

	/* row for week one */
	$calendar.= '<tr class="calendar-row">';

	/* print "blank" days until the first of the current week */
	for($x = 0; $x < $running_day; $x++):
		$calendar.= '<td class="calendar-day-np"> </td>';
	$days_in_this_week++;
	endfor;

	/* keep going with days.... */
	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
		$calendar.= '<td class="calendar-day">';
	/* add in the day number */
	$calendar.= '<div class="day-number">'.$list_day.'</div>';

	/** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
	$calendar.= str_repeat('<p> </p>',2);

	$calendar.= '</td>';
	if($running_day == 6):
		$calendar.= '</tr>';
	if(($day_counter+1) != $days_in_month):
		$calendar.= '<tr class="calendar-row">';
	endif;
	$running_day = -1;
	$days_in_this_week = 0;
	endif;
	$days_in_this_week++; $running_day++; $day_counter++;
	endfor;

	/* finish the rest of the days in the week */
	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np"> </td>';
		endfor;
		endif;

		/* final row */
		$calendar.= '</tr>';

		/* end the table */
		$calendar.= '</table>';

		/* all done, return result */
		return $calendar;
	}

	?>
		<h2>
			January <?php echo $currentYear1;?>
		</h2>
		<?php
			echo draw_calendar(1,$currentYear1);
		?>

		<h2>
			February <?php echo $currentYear1;?>
		</h2>
		<?php
			echo draw_calendar(2,$currentYear1);
		?>

		<h2>
			March <?php echo $currentYear1;?>
		</h2>
		<?php
			echo draw_calendar(3,$currentYear1);
		?>

		<h2>
			April <?php echo $currentYear1;?>
		</h2>
		<?php
			echo draw_calendar(4,$currentYear1);
		?>

		<h2>
			May <?php echo $currentYear1;?>
		</h2>
		<?php
			echo draw_calendar(5,$currentYear1);
		?>

		<h2>
			June <?php echo $currentYear1;?>
		</h2>
		<?php
			echo draw_calendar(6,$currentYear1);
		?>

		<h2>
			July <?php echo $currentYear1;?>
		</h2>
		<?php
			echo draw_calendar(7,$currentYear1);
		?>

		<h2>
			August <?php echo $currentYear1;?>
		</h2>
		<?php
			echo draw_calendar(8,$currentYear1);
		?>

		<h2>
			September <?php echo $currentYear1;?>
		</h2>
		<?php
			echo draw_calendar(9,$currentYear1);
		?>

		<h2>
			October <?php echo $currentYear1;?>
		</h2>
		<?php
			echo draw_calendar(10,$currentYear1);
		?>

		<h2>
			November <?php echo $currentYear1;?>
		</h2>
		<?php
			echo draw_calendar(11,$currentYear1);
		?>

		<h2>
			December <?php echo $currentYear1;?>
		</h2>
		<?php
			echo draw_calendar(12,$currentYear1);
		?>

		<h2>
			January <?php echo $currentYear2;?>
		</h2>
		<?php
			echo draw_calendar(1,$currentYear2);
		?>

		<h2>
			February <?php echo $currentYear2;?>
		</h2>
		<?php
			echo draw_calendar(2,$currentYear2);
		?>

		<h2>
			March <?php echo $currentYear2;?>
		</h2>
		<?php
			echo draw_calendar(3,$currentYear2);
		?>

		<h2>
			April <?php echo $currentYear2;?>
		</h2>
		<?php
			echo draw_calendar(4,$currentYear2);
		?>

		<h2>
			May <?php echo $currentYear2;?>
		</h2>
		<?php
			echo draw_calendar(5,$currentYear2);
		?>

		<h2>
			June <?php echo $currentYear2;?>
		</h2>
		<?php
			echo draw_calendar(6,$currentYear2);
		?>

		<h2>
			July <?php echo $currentYear2;?>
		</h2>
		<?php
			echo draw_calendar(7,$currentYear2);
		?>

		<h2>
			August <?php echo $currentYear2;?>
		</h2>
		<?php
			echo draw_calendar(8,$currentYear2);
		?>

		<h2>
			September <?php echo $currentYear2;?>
		</h2>
		<?php
			echo draw_calendar(9,$currentYear2);
		?>

		<h2>
			October <?php echo $currentYear2;?>
		</h2>
		<?php
			echo draw_calendar(10,$currentYear2);
		?>

		<h2>
			November <?php echo $currentYear2;?>
		</h2>
		<?php
			echo draw_calendar(11,$currentYear2);
		?>

		<h2>
			December <?php echo $currentYear2;?>
		</h2>
		<?php
			echo draw_calendar(12,$currentYear2);
		?>