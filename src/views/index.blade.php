@include('forum::partials.pathdisplay')

@foreach ($categories as $category)
<table class="table table-index">
	<thead>
		<tr>
			<td colspan="3">
				<div class="category_title">
					<a href={{$category->url}}>{{{ $category->title }}}</a>
				</div>
				<div class="category_subtitle">{{{ $category->subtitle }}}</div>
			</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Forum</th>
			<th>Topics</th>
			<th>Posts</th>
		</tr>
		@if (count($category->subcategories) > 0)
		@foreach($category->subcategories AS $subcategory)
		<tr>
			<th>
				<div class="category_title">
					<a href={{$subcategory->url}}>{{{ $subcategory->title }}}</a>
				</div>
				<div class="category_subtitle">{{{ $subcategory->subtitle }}}</div>
			</th>
			<td>{{ $subcategory->topicCount }}</td>
			<td>{{ $subcategory->replyCount }}</td>
		</tr>
		@endforeach
		@else
		<tr>
			<th colspan="3">
				No category found
			</th>
		</tr>
		@endif
	</tbody>
</table>
@endforeach
