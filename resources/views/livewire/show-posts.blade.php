<div>
    <table>
    	<thead>
    		<tr>
    			<th>Title</th>
    			<th>Content</th>
    			<th></th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($posts as $post)
    		<tr wire:key={{ $post->id }}>
    			<td>{{ $post->title }}</td>
    			<td>{{ str($post->content)->limit(45) }}</td>

    			<td>
    				<button type="button"
    				wire:click="delete({{$post->id}})"
    				wire:confirm="are you sure?"

    				>Delete</button>
    			</td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>
</div>
