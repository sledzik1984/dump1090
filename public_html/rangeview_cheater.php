?php
header('Content-type: text/plain');
header('Content-Disposition: attachment; filename="rangeview.kml"');
readfile('radar.kml'); // Real Rangeview Generated KML FILE
?> 
