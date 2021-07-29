var search = document.getElementById('search');
var cariBtn = document.getElementById('cari_btn');
var tableContainer = document.getElementById('table_container');

if(search){
  search.addEventListener('keyup', function(){
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function(){
    if(xhr.readyState == 4 && xhr.status == 200){
      // console.log('ready')
      tableContainer.innerHTML = xhr.responseText;
    }
  }
    xhr.open('GET', 'http://localhost/cv_project_web/public/dashboard/searchApplicantsTable/' + search.value, true);
    xhr.send();
  });
}

$(function(){
  $('.tampilModalUbah').on('click', function() {
      const id  = $(this).data('id');
      //console.log(id);
      $.ajax({
          url: 'http://localhost/cv_project_web/public/dashboard/getDataJob',
          data: {id: id},
          method: 'post',
          dataType: 'json',
          success: function(data) {
              //console.log(data);
              $('#id').val(data.id);
              $('#name_job').val(data.name_job);
              $('#abstrak').val(data.abstrak);
              tinymce.get('description').setContent(data.description);
              //console.log(textArea);
              //textArea.selection.setContent(data.description);
              $('#level').val(data.level).attr('selected','selected');
              $('#departement').val(data.id_departement).attr('selected','selected');
              $('#status').val(data.status).attr('selected','selected');
              $('#date').val(data.date);
          }
      });
  });

});
