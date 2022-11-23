<x-tests.app>
<x-slot name="header">header1</x-slot>
component test1
<x-tests.card title="タイトル" content="本文" :message="$message"/>
<x-tests.card class='bg-slate-400' title="タイトル" content="本文" :message="$message"/>
<x-test-class-base classBaseMessage="メッセージです"/>
<x-test-class-base classBaseMessage="メッセージです" defaultMessage="初期値変更"/>
</x-tests.app>
