@forelse($posts as $post)
<div style="margin-bottom:60px;max-width: 600px;">
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
</div>
@empty
    <p>No posts found</p>
@endforelse

<div class="filters flex space-x-6">
    <div class="w-1/3">
        <select name="category" id="category" class="w-full rounded-xl ph-4 py-2 border-none">
            <option value="One">One</option>
            <option value="Two">Two</option>
            <option value="Three">Three</option>
        </select>
    </div>
    <div class="w-1/3">
        <select name="other_filters" id="other_filters" class="w-full rounded-xl ph-4 py-2 border-none">
            <option value="One">One</option>
            <option value="Two">Two</option>
            <option value="Three">Three</option>
        </select>
    </div>
    <div class="w-2/3 relative">
        <input type="search" placeholder="find an idea" class="w-full rounded-xl bg-white border-none px-4 py-2 pl-8">
        <div class="absolute top-0 flex items-center h-full ml-2">

        </div>
    </div>
</div>

<div class="ideas-container space-y-6 my-6">
    @foreach($posts as $post)
    <div class="idea-container bg-white rounded-xl flex">
        <div class="border-r border-gray-100 px-5 py-8">
            <div class="text-center">
                <div class="font-semibold text-2xl">12</div>
                <div class="text-gray-500">Votes</div>
            </div>

            <div class="mt-8">
                <button class="w-20 bg-gray border-gray font-bold text-xs uppercase rounded-xl px-4 py-3">
                    Vote
                </button>
            </div>
        </div>
                        <div
                            class="{{ $post->title}} font-bold text-xs uppercase w-28 text-center rounded-2xl text-white h-7 py-2 px-4">
                            {{ $post->title}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach