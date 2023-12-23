function showForm() {
  var overlay = document.getElementById('overlay');
  var form = document.getElementById('submissionForm');

  overlay.style.display = 'flex';
  form.style.display = 'block'; 
}
document.getElementById('myForm').addEventListener('submit', function() {
  document.getElementById('submitBtn').disabled = true;
});