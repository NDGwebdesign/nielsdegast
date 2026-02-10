<x-admin-base-layout>
    <div class="max-w-7xl mx-auto px-6 py-12">

        <h1 class="text-4xl font-bold text-white mb-8 text-center">
            Contact Inbox
        </h1>

        <div class="bg-gradient-to-br from-[#1a1a1a] to-black rounded-2xl shadow-xl overflow-hidden">

            <table class="w-full text-left border-collapse">
                <thead class="bg-black/80 text-red-500 text-sm uppercase">
                    <tr>
                        <th class="p-4">Naam</th>
                        <th class="p-4">Email</th>
                        <th class="p-4">Onderwerp</th>
                        <th class="p-4">Bericht</th>
                        <th class="p-4">Datum</th>
                        <th class="p-4 text-center">Actie</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($contacts as $contact)
                        <tr class="border-b border-red-500/10 hover:bg-red-500/5 transition">
                            <td class="p-4 font-semibold text-white">
                                {{ $contact->name }}
                            </td>

                            <td class="p-4 text-gray-300">
                                {{ $contact->email }}
                            </td>

                            <td class="p-4 text-gray-300">
                                {{ $contact->subject }}
                            </td>

                            <td class="p-4 text-gray-300 max-w-md truncate">
                                {{ $contact->content }}
                            </td>

                            <td class="p-4 text-gray-400">
                                {{ $contact->created_at->format('d-m-Y H:i') }}
                            </td>

                            <td class="p-4 text-center">
                                <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je dit bericht wilt verwijderen?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 font-semibold">
                                        Verwijderen
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="p-10 text-center text-gray-400">
                                Geen berichten ontvangen
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex justify-center">
            {{ $contacts->links('pagination::tailwind') }}
        </div>

    </div>
</x-admin-base-layout>
