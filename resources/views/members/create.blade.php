<x-guest-layout>
    @if (session('success'))
        <div class="max-w-md mx-auto mb-4 p-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="max-w-md mx-auto mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md" method="POST" action="{{ route('member.store') }}">
        @csrf

        <h2 class="text-xl font-semibold mb-5 text-gray-800">Create Member</h2>

        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">
                Member Name
            </label>
            <input type="text" id="name" name="name" value="{{ old('name') }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                placeholder="Enter member name" required />
        </div>

        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
                Email
            </label>
            <input type="email" id="email" name="email" value="{{ old('email') }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                placeholder="member@example.com" required />
        </div>

        <div class="mb-5">
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">
                Phone Number
            </label>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                placeholder="01XXXXXXXXX" required />
        </div>

        <div class="mb-5">
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900">
                Address
            </label>
            <textarea id="address" name="address" rows="3"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                placeholder="Enter address" required>{{ old('address') }}</textarea>
        </div>

        <button type="submit"
            class="w-full text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5">
            Save Member
        </button>
    </form>
</x-guest-layout>
