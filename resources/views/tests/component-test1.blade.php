<x-tests.app>
    <x-slot name="header">header1</x-slot>
component-test1

<x-tests.card title="Title1" content="Content1" :message="$message"/>
<x-tests.card title="Title2" />
<x-tests.card title="Title3" class="bg-red-300"/>
</x-tests.app>