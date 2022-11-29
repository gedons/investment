 //confirm deletion with SweetAlert	 
	 	$(document).on("click",".confirmDelete",function(){
	 	var record = $(this).attr("record");
	 	var recordid = $(this).attr("recordid");
	 	
		 Swal.fire({
		  title: 'Are you sure?',
		  text: "You won't be able to revert this!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  if (result.value) {
		    window.location.href="/admin/delete-"+record+"/"+recordid;
		  }
		});

	 });