<div id="modal-form-add-comment" class="modal hide fade">
  	<div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    	<h6 id="modal-formLabel">Add comment</h6>
  	</div>
  	<div>
        <form class="form-horizontal fill-up separate-sections" name="paper-add-comment" id="paper-add-comment">
					<input type="hidden" name="operation" id="operation" value="5"/>
					<input type="hidden" name="paper_id" id="paper_id" value="{$paper[0].id}"/>	
					<input type="hidden" name="userid" id="userid" value="{$userid}"/>	
					<div>
        		<textarea rows="10" name="comment" placeholder="Type comments" style="font-size: 14px;width: 99%;margin: auto;"></textarea>
      		</div>
				</form>
  	</div>
  	<div class="modal-footer">
    	<button class="btn btn-blue" data-dismiss="modal" id="btn-add-comment">Add comment</button>
  	</div>
</div>
