function viewcalendar() {
  kalendarik = window.open("php_calendar/calendar.php", "kalendarik" , "location=0, menubar=0, scrollbars=0, status=0, titlebar=0, toolbar=0, directories=0, resizable=1, width=350, height=350, top=100, left=350");
  kalendarik.resizeTo(210, 250);
  kalendarik.moveTo(650, 300);
}
function insertdate(d) {
  window.close();
  window.opener.document.getElementById('date').value = d;
}
