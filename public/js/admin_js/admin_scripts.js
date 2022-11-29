 //update profile status
	 	$(document).on("click",".updateProfilestatus",function(){
		var status = $(this).children("i").attr("status");
		var profile_id = $(this).attr("profile_id");
		$.ajax({
			type:'post',
			url :'/admin/updateProfilestatus',
			data :{status:status,profile_id:profile_id},
			success:function (resp) {
				
				if (resp['status']==0) {
					$("#profile-"+profile_id).html("<i style'color: red;' class='fas fa-toggle-off' aria-hidden='true' status='Inactive'></i> Account Locked!")
				}else if (resp['status']==1) {
					$("#profile-"+profile_id).html("<i style'color: green;' class='fas fa-toggle-on' aria-hidden='true' status='Active'></i> Account Unlocked!")
				}
			},
			error:function () {
				alert("error");
			}
		});
	});


 //verify profile 
	 	$(document).on("click",".verifyProfilestatus",function(){
		var status = $(this).children("i").attr("status");
		var verify_id = $(this).attr("verify_id");
		$.ajax({
			type:'post',
			url :'/admin/verifyProfilestatus',
			data :{status:status,verify_id:verify_id},
			success:function (resp) {
				
				if (resp['status']==0) {
					$("#verify-"+verify_id).html("<i style'color: red;' class='fas fa-toggle-off' aria-hidden='true' status='Inactive'></i> Account Rebuked!")
				}else if (resp['status']==1) {
					$("#verify-"+verify_id).html("<i style'color: green;' class='fas fa-toggle-on' aria-hidden='true' status='Active'></i> Account Verified!")
				}
			},
			error:function () {
				alert("error");
			}
		});
	});

