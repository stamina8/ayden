layui.define(['table', 'jquery', 'element'], function (exports) {
	"use strict";

	var MOD_NAME = 'message',
		$ = layui.jquery,
		element = layui.element;

	var message = function (opt) {
		this.option = opt;
	};

	message.prototype.render = function (opt) {
		//默认配置值
		var option = {
			elem: opt.elem,
			url: opt.url ? opt.url : false,
			height: opt.height,
			data: opt.data
		}

		if (option.url != false) {
			option.data = getData(option.url);
			var notice = createHtml(option);
			$(option.elem).html(notice);
		}
		return new message(option);
	}

	message.prototype.click = function (callback) {
		$("*[notice-id]").click(function (event) {
			event.preventDefault();
			var id = $(this).attr("notice-id");
			var title = $(this).attr("notice-title");
			var context = $(this).attr("notice-context");
			var form = $(this).attr("notice-form");
			var type = $(this).attr("notice-type");
			callback(id, title, context, form, type);
		})
	}


	/** 同 步 请 求 获 取 数 据 */
	function getData(url) {

		$.ajaxSettings.async = false;
		var data = null;

		// $.get(api + '/api/member/memberNewsList', function (result) {
		// 	data = result.data;
		// });

		$.ajax({
			headers: {
				"Authorization": 'bearer ' + localStorage.getItem("token")
			},
			url: api + "/api/member/memberNewsList/0",
			// data: { content: backreason },
			dataType: 'json',
			type: 'get',
			success: function (result) {
				if (result.code == '200') {
					data = result.data;
				} else if (result.code == '300') {
					layer.msg(result.msg, {
						icon: 2,
						time: 2000
					}, function () {
						top.location.href = login;
					});
				} else {
					layer.msg(result.msg, {
						icon: 2,
						time: 1000
					});
				}
			}
		})

		$.ajaxSettings.async = true;
		return data;
	}

	function createHtml(option) {

		var notice = '<li class="layui-nav-item" lay-unselect="">' +
			'<a href="#" class="notice layui-icon layui-icon-notice"></a>' +
			'<div class="layui-nav-child layui-tab pear-notice" style="left: -200px;">';

		var noticeTitle = '<ul class="layui-tab-title">';

		var noticeContent = '<div class="layui-tab-content" style="height:' + option.height + ';overflow-x: hidden;">'

		var index = 0;

		// 根据 data 便利数据
		$.each(option.data, function (i, item) {

			if (index === 0) {

				noticeTitle += '<li class="layui-this">' + item.title + '</li>';

				noticeContent += '<div class="layui-tab-item layui-show">';

			} else {

				noticeTitle += '<li>' + item.title + '</li>';

				noticeContent += '<div class="layui-tab-item">';

			}

			$.each(item.children, function (i, note) {

				noticeContent += '<div class="pear-notice-item" notice-form="' + note.form + '" notice-context="' + note.context +
					'" notice-title="' + note.title + '" notice-id="' + note.id + '" notice-type="' + note.type + '">' +
					'<img src="' + note.avatar + '">' +
					'<span>' + note.title + '</span>' +
					'<span>' + note.time + '</span>' +
					'</div>';

			})

			noticeContent += '</div>';

			index++;
		})

		noticeTitle += '</ul>';

		noticeContent += '</div>';

		notice += noticeTitle;

		notice += noticeContent;

		notice += '</div></li>';

		return notice;

	}

	exports(MOD_NAME, new message());
})
