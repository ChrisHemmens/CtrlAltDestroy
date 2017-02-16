//Google Analytics
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-71479321-1', 'auto');
ga('send', 'pageview');

//Tables
$(document).ready(function() {
  $('#members').DataTable();
} );
$(document).ready(function() {
  $('#membersSmall').DataTable();
} );
$(document).ready(function() {
  $('#coList').DataTable({
   "bPaginate":false,
   "bLengthChange":false,
   "bFilter":false,
   "bInfo":false,
   "pageLength":50 
 });
});
$(document).ready(function() {
  $('#oudsteList').DataTable({
   "bPaginate":false,
   "bLengthChange":false,
   "bFilter":false,
   "bInfo":false,
   "pageLength":50 
 });
});
$(document).ready(function() {
  $('#ratio').DataTable({
   "bPaginate":false,
   "bLengthChange":false,
   "bFilter":false,
   "bInfo":false
 });
});
$(document).ready(function() {
  $('#donaties').DataTable({
   "bPaginate":false,
   "bLengthChange":false,
   "bFilter":false,
   "bInfo":false
 });
});
$(document).ready(function() {
  $('#ontvangen').DataTable({
   "bPaginate":false,
   "bLengthChange":false,
   "bFilter":false,
   "bInfo":false
 });
});
$(document).ready(function() {
  $('#mogelijkOudste').DataTable({
   "bPaginate":false,
   "bLengthChange":false,
   "bFilter":false,
   "bInfo":false
 });
});