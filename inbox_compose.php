<form class="inbox-compose form-horizontal" id="fileupload" action="#" method="POST" enctype="multipart/form-data">
	<div class="inbox-compose-btn">
		<button class="btn blue"><i class="icon-check"></i>Send</button>
		<button class="btn">Discard</button>
		<button class="btn">Draft</button>
	</div>
	<div class="inbox-control-group mail-to">
		<label class="control-label">To:</label>
		<div class="controls controls-to">
			<input type="text" class="m-wrap span12" name="to">
			<span class="inbox-cc-bcc">
			<span class="inbox-cc">Cc</span>
			<span class="inbox-bcc">Bcc</span>
			</span>
		</div>
	</div>
	<div class="inbox-control-group input-cc hide">
		<a href="javascript:;" class="close"></a>
		<label class="control-label">Cc:</label>
		<div class="controls controls-cc">
			<input type="text" name="cc" class="m-wrap span12">
		</div>
	</div>
	<div class="inbox-control-group input-bcc hide">
		<a href="javascript:;" class="close"></a>
		<label class="control-label">Bcc:</label>
		<div class="controls controls-bcc">
			<input type="text" name="bcc" class="m-wrap span12">
		</div>
	</div>
	<div class="inbox-control-group">
		<label class="control-label">Subject:</label>
		<div class="controls">
			<input type="text" class="m-wrap span12" name="subject">
		</div>
	</div>
	<div class="inbox-control-group">
		<textarea class="span12 inbox-editor inbox-wysihtml5 m-wrap" name="message" rows="12"></textarea>
	</div>
	<div class="inbox-compose-attachment">
		<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
		<div class="row-fluid fileupload-buttonbar pull-right">
			<!-- The fileinput-button span is used to style the file input field as button -->
			<span class="btn green fileinput-button">
			<i class="icon-plus icon-white"></i>
			<span>Add files...</span>
			<input type="file" name="files[]" multiple>
			</span>
		</div>
		<!-- The table listing the files available for upload/download -->
		<table role="presentation" class="table table-striped">
			<tbody class="files"></tbody>
		</table>
	</div>
	<script id="template-upload" type="text/x-tmpl">
		{% for (var i=0, file; file=o.files[i]; i++) { %}
		    <tr class="template-upload fade">
		        <td class="preview" width="10%"><span class="fade"></span></td>
		        <td class="name" width="30%"><span>{%=file.name%}</span></td>
		        <td class="size" width="40%"><span>{%=o.formatFileSize(file.size)%}</span></td>
		        {% if (file.error) { %}
		            <td class="error" width="20%" colspan="2"><span class="label label-important">Error</span> {%=file.error%}</td>
		        {% } else if (o.files.valid && !i) { %}
		            <td>
		                <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
		                <div class="bar" style="width:0%;">
		                </div>
		                </div>
		            </td>
		        {% } else { %}
		            <td colspan="2"></td>
		        {% } %}
		        <td class="cancel" width="10%">{% if (!i) { %}
		            
		        {% } %}</td>
		    </tr>
		{% } %}
	</script>
	<!-- The template to display files available for download -->
	<script id="template-download" type="text/x-tmpl">
		{% for (var i=0, file; file=o.files[i]; i++) { %}
		    <tr class="template-download fade">
		        {% if (file.error) { %}
		            <td width="10%"></td>
		            <td class="name" width="30%"><span>{%=file.name%}</span></td>
		            <td class="size" width="40%"><span>{%=o.formatFileSize(file.size)%}</span></td>
		            <td class="error" width="30%" colspan="2"><span class="label label-important">Error</span> {%=file.error%}</td>
		        {% } else { %}
		            <td class="preview" width="10%">
		            {% if (file.thumbnail_url) { %}
		                <a class="fancybox-button" data-rel="fancybox-button" href="{%=file.url%}" title="{%=file.name%}">
		                <img src="{%=file.thumbnail_url%}">
		                </a>
		            {% } %}</td>
		            <td class="name" width="30%">
		                <a href="{%=file.url%}" title="{%=file.name%}" data-gallery="{%=file.thumbnail_url&&'gallery'%}" download="{%=file.name%}">{%=file.name%}</a>
		            </td>
		            <td class="size" width="40%"><span>{%=o.formatFileSize(file.size)%}</span></td>
		            <td colspan="2"></td>
		        {% } %}
		        <td class="delete" width="10%">
		            <button class="btn  mini" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}"{% if (file.delete_with_credentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
		                <i class="icon-remove"></i>
		            </button>
		        </td>
		    </tr>
		{% } %}
	</script>
	<div class="inbox-compose-btn">
		<button class="btn blue"><i class="icon-check"></i>Send</button>
		<button class="btn">Discard</button>
		<button class="btn">Draft</button>
	</div>
</form>