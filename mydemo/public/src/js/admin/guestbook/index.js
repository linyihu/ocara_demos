function deleteRecord(delId)
{
	if (confirm('确定要删除吗？')) {
		var url = ocUrl(2, new Array('admin', 'guestbook'), 'delete');

		$.post(
			url,
			{id: delId},
			function(data){
				console.log(data)
				if (data.status == 'success') {
					alert('操作成功！');
					location.reload();
				} else {
					alert('【'+data.code+'】' + data.message);
				}
				return false;
			}
		,'json');
	}
}