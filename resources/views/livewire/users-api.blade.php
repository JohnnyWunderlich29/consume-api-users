<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Profile Image
                </th>
                <th scope="col" class="px-6 py-3">
                    Complete Name
                </th>
            </tr>
        </thead>
        <tbody>
            @if(isset($users['data']))
                @foreach ($users['data'] as $key => $data)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <img src="{{ $data['picture'] }}" alt="avatar" class="w-10 h-10 rounded-full">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $data['title'] }}. {{ $data['firstName'] }} {{ $data['lastName'] }}</th>
                    </tr>
                @endforeach
            @else
                <tr class="px-6 py-4">
                    <td> No Data </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
