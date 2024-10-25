Select Language:
                        <form method="POST" action="{{ route('change.language') }}">
                            @csrf
                            <select name="language" onchange="this.form.submit()"
                                class="text-sm font-semibold leading-6 text-gray-900 border-none bg-transparent focus:outline-none">
                                <option value="de" {{ app()->getLocale() == 'de' ? 'selected' : '' }}>No translation</option>
                                <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                                <option value="dari" {{ app()->getLocale() == 'dari' ? 'selected' : '' }}>Dari</option>
                                <option value="pashto" {{ app()->getLocale() == 'pashto' ? 'selected' : '' }}>Pashto</option>
                            </select>
                        </form>