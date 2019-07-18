<h1>Influencer List</h1>

<div>
  @foreach($influencers as $influencer)
	<figure class="card">
		<figcaption class="info-wrap">
				<h4>{{ $influencer->name }} ({{ $influencer->age }} years) </h4>
				<p><strong>Poste : </strong> {{ $influencer->title }}</p>
        <p><strong>Localization : </strong> {{ $influencer->localization }}</p>
        <p>
        @if($influencer->categories)
          <strong>Category : </strong>
          @foreach ($influencer->categories as $category)
                  {{ $category->name }}
              @endforeach
          </p>
        @endif
        @if($influencer->facebook)
          <p><strong>Facebook : </strong> {{ $influencer->facebook }}</p>
        @endif
        @if($influencer->twitter)
        <p><strong>Twitter : </strong> {{ $influencer->twitter }}</p>
        @endif
        @if($influencer->instagram)
        <p><strong>Instagram : </strong>{{ $influencer->instagram }}</p>
        @endif
        @if($influencer->website)
        <p><strong>Website : </strong>{{ $influencer->website }}</p>
        @endif
		</figcaption>
	</figure>
  @endforeach
</div>

<style>
.card .info-wrap {
    overflow: hidden;
    padding: 15px;
    border-top: 1px solid #eee;
}
</style>