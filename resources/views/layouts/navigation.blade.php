<x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('roles.create')">
                            {{ __('Create Roles') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('roles.index')">
                            {{ __('View Roles') }}
                        </x-dropdown-link>                