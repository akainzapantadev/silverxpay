
  var getAll = ajaxShortLink('getAll',{table:'',sortBy:null,sortOrder:null})

  var getByID = ajaxShortLink('getByID',{
    table:'',
    id:0,
    sortBy:null,
    sortOrder:null
  })

  var getCustom = ajaxShortLink('getCustom',{
    table:'',
    fieldName:'',
    where:'',
    sortBy:null,
    sortOrder:null
  })

  var insert = ajaxShortLink('insert',{
      table:'',
      record:{
        //  db tbl name : value
        'test1':escapeHtml(''), 
        'test2':escapeHtml('')
      }
  })

  var updateID = ajaxShortLink('updateID',{
      table:'',
      id:0,
      record:{
        //  db tbl name : value
        'test1':escapeHtml(''), 
        'test2':escapeHtml('')
      }
  })

  var updateCustom = ajaxShortLink('updateCustom',{
      table:'',
      fieldName:'',
      where:'',
      record:{
        //  db tbl name : value
        'test1':escapeHtml(''), 
        'test2':escapeHtml('')
      }
  })

  var deleteID = ajaxShortLink('deleteID',{table:'',id:0,})

  function escapeHtml(text) {
    var map = {
      '&': '&amp;',
      '<': '&lt;',
      '>': '&gt;',
      '"': '&quot;',
      "'": '&#039;'
    };
    return text.replace(/[&<>"']/g, function(m) { return map[m]; });
  }