<x-layout>
    <div dir="rtl" class="container mx-auto px-4 py-10 " id="pashto-version">
        <header class="text-center mb-10">
            <h1 class="text-4xl font-bold text-blue-700">{{ __('د تابعیت ازموینې غوښتنلیک ته خوش آمدید') }}</h1>
            <p class="text-lg text-gray-600 mt-4">
                {{ __('د متقابلې پوښتنو او شخصي نظریاتو سره د تابعیت ازموینې لپاره چمتو شئ.') }}</p>
        </header>
        <section class="bg-white shadow-lg rounded-lg p-6 mb-10">
            <h2 class="text-2xl font-semibold text-blue-600 mb-4">{{ __('د غوښتنلیک په اړه') }}</h2>
            <p class="text-gray-700 leading-relaxed">
                {{ __('دا غوښتنلیک د دې لپاره جوړ شوی چې کاروونکي په ځانګړې او جذابې طریقه د تابعیت ازموینې لپاره چمتو کړي. دا ازموینه د عامو پوښتنو او کارونکي د ایالت لپاره ځانګړې اضافي پوښتنې لري. د کاروونکي دوستانه انټرنیټ، شخصي نظریات، او د ژبې ملاتړ سره، غوښتنلیک یوه مؤثره لاره وړاندې کوي.') }}
            </p>
        </section>
        <section class="bg-blue-50 p-6 rounded-lg mb-10">
            <h2 class="text-2xl font-semibold text-blue-600 mb-4">{{ __('کلیدي ځانګړتیاوې') }}</h2>
            <ul class="list-disc pl-6 space-y-2">
                <li><strong>{{ __('تعاملي ازموینې:') }}</strong>
                    {{ __('د ازموینې په هر وخت کې د تصادفي انتخاب شوو پوښتنو سره تمرین وکړئ.') }}</li>
                <li><strong>{{ __('محلي محتوا:') }}</strong>
                    {{ __('ازموینه په څو ژبو کې موجوده ده، په شمول الماني، انګلیسي، داري، او پښتو، چې محتوا د کاروونکي انتخاب پراساس ښکاره کیږي.') }}
                </li>
                <li><strong>{{ __('د ایالت ځانګړي پوښتنې:') }}</strong>
                    {{ __('هره ازموینه پوښتنې لري چې د ټاکل شوي ایالت لپاره ځانګړې شوي دي.') }}</li>
                <li><strong>{{ __('فوري فیډبیک:') }}</strong>
                    {{ __('جوابونه سمدستي نښه کیږي، چې تاسو سره مرسته کوي چې په ځای کې زده کړئ.') }}</li>
                <li><strong>{{ __('وروستۍ نمره بیاکتنه:') }}</strong>
                    {{ __('خپل ځوابونه بیاکتنه وکړئ او د هرې ازموینې وروسته خپل نمره وګورئ.') }}</li>
            </ul>
        </section>
        <section class="bg-white shadow-lg rounded-lg p-6 mb-10">
            <h2 class="text-2xl font-semibold text-blue-600 mb-4">{{ __('څنګه کار کوي') }}</h2>
            <ol class="list-decimal pl-6 space-y-2">
                <li>{{ __('خپل ایالت له لیست څخه انتخاب کړئ.') }}</li>
                <li>{{ __('۳۳ پوښتنو ته ځواب ورکړئ: ۳۰ عامې پوښتنې او ۳ د ایالت ځانګړي پوښتنې.') }}</li>
                <li>{{ __('هره پوښتنه څلور انتخابي ځوابونه لري. هغه ځواب انتخاب کړئ چې فکر کوئ سم دی.') }}</li>
                <li>{{ __('فوري فیډبیک ښیي چې آیا ستاسو انتخاب سم دی یا ناسم.') }}</li>
                <li>{{ __('کله چې بشپړ شي، ستاسو وروستۍ نمره د سم ځوابونو سره ښکاره کیږي.') }}</li>
            </ol>
        </section>
        <div class="text-center">
            <a href="{{ route('test.list') }}"
                class="inline-block bg-blue-700 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                {{ __('د خپل ازموینې پیل') }}
            </a>
        </div>
    </div>
    
</x-layout>
