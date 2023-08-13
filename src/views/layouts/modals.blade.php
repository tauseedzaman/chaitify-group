{{-- ---------------------- Image modal box ---------------------- --}}
<div id="imageModalBox" class="imageModal">
    <span class="imageModal-close">&times;</span>
    <img class="imageModal-content" id="imageModalBoxSrc">
</div>

{{-- ---------------------- Delete Modal ---------------------- --}}
<div class="app-modal" data-name="delete">
    <div class="app-modal-container">
        <div class="app-modal-card" data-name="delete" data-modal='0'>
            <div class="app-modal-header">Are you sure you want to delete this?</div>
            <div class="app-modal-body">You can not undo this action</div>
            <div class="app-modal-footer">
                <a href="javascript:void(0)" class="app-btn cancel">Cancel</a>
                <a href="javascript:void(0)" class="app-btn a-btn-danger delete">Delete</a>
            </div>
        </div>
    </div>
</div>
{{-- ---------------------- Leave Modal ---------------------- --}}
<div class="app-modal" data-name="leave">
    <div class="app-modal-container">
        <div class="app-modal-card" data-name="leave" data-modal='0'>
            <div class="app-modal-header">Are you sure you want to leave this group?</div>
            <div class="app-modal-body">You can not undo this action</div>
            <div class="app-modal-footer">
                <a href="javascript:void(0)" class="app-btn cancel">Cancel</a>
                <a href="javascript:void(0)" class="app-btn a-btn-danger delete">Leave</a>
            </div>
        </div>
    </div>
</div>

{{-- ---------------------- Alert Modal ---------------------- --}}
<div class="app-modal" data-name="alert">
    <div class="app-modal-container">
        <div class="app-modal-card" data-name="alert" data-modal='0'>
            <div class="app-modal-header"></div>
            <div class="app-modal-body"></div>
            <div class="app-modal-footer">
                <a href="javascript:void(0)" class="app-btn cancel">Cancel</a>
            </div>
        </div>
    </div>
</div>
{{-- ---------------------- Settings Modal ---------------------- --}}
<div class="app-modal" data-name="settings">
    <div class="app-modal-container">
        <div class="app-modal-card" data-name="settings" data-modal='0'>
            <form id="update-settings" action="{{ route('avatar.update') }}" enctype="multipart/form-data"
                method="POST">
                @csrf
                {{-- <div class="app-modal-header">Update your profile settings</div> --}}
                <div class="app-modal-body">
                    {{-- Udate profile avatar --}}
                    <div class="avatar av-l upload-avatar-preview chatify-d-flex"
                        style="background-image: url('{{ Chatify::getUserWithAvatar(Auth::user())->avatar }}');"></div>
                    <p class="upload-avatar-details"></p>
                    <label class="app-btn a-btn-primary update" style="background-color:{{ $messengerColor }}">
                        Upload New
                        <input class="upload-avatar chatify-d-none" accept="image/*" name="avatar" type="file" />
                    </label>
                    {{-- Dark/Light Mode  --}}
                    <p class="divider"></p>
                    <p class="app-modal-header">Dark Mode <span
                            class="
                        {{ Auth::user()->dark_mode > 0 ? 'fas' : 'far' }} fa-moon dark-mode-switch"
                            data-mode="{{ Auth::user()->dark_mode > 0 ? 1 : 0 }}"></span></p>
                    {{-- change messenger color  --}}
                    <p class="divider"></p>
                    {{-- <p class="app-modal-header">Change {{ config('chatify.name') }} Color</p> --}}
                    <div class="update-messengerColor">
                        @foreach (config('chatify.colors') as $color)
                            <span style="background-color: {{ $color }}" data-color="{{ $color }}"
                                class="color-btn"></span>
                            @if (($loop->index + 1) % 5 == 0)
                                <br />
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="app-modal-footer">
                    <a href="javascript:void(0)" class="app-btn cancel">Cancel</a>
                    <input type="submit" class="app-btn a-btn-success update" value="Save Changes" />
                </div>
            </form>
        </div>
    </div>
</div>

{{-- ---------------------- Create group Modal ---------------------- --}}
<div class="app-modal" data-name="group">
    <div class="app-modal-container" style="    width: 500px;">
        <div class="app-modal-card" data-name="group" data-modal='0'>
            <form id="create-group" action="{{ route('group.create') }}" enctype="multipart/form-data" method="POST">
                @csrf
                {{-- <div class="app-modal-header">Update your profile settings</div> --}}
                <div class="app-modal-body">
                    <h2 style="text-align: center">Create New Group</h2>
                    <br>
                    <br>

                    <p class="upload-avatar-details"></p>
                    <label class="app-btn a-btn-primary update" style="background-color:blue">
                        Upload Group Logo
                        <input class="upload-avatar chatify-d-none" required accept="image/*" name="logo"
                            type="file" />
                    </label>

                    <p class="divider"></p>
                    <div class="form-group">
                        <label for="group name">Group Name</label>
                        <input id="group name" required class="form-control" placeholder="Group Name" type="text"
                            name="name">
                    </div>

                    <p class="divider"></p>
                    <div class="form-group">
                        <label for="description">Group Description</label>
                        <textarea id="description" required class="form-control" name="description" rows="3"></textarea>
                    </div>

                    {{-- change messenger color  --}}
                    <p class="divider"></p>
                    {{-- <p class="app-modal-header">Change {{ config('chatify.name') }} Color</p> --}}
                </div>
                <div class="app-modal-footer">
                    <a href="javascript:void(0)" class="app-btn cancel">Cancel</a>
                    <input type="submit" class="app-btn a-btn-success update" value="Create Group" />
                </div>
            </form>
        </div>
    </div>
</div>
{{-- ---------------------- Create group Modal ---------------------- --}}
<div class="app-modal" data-name="group-members">
    <div class="app-modal-container" style="width: 500px;">
        <div class="app-modal-card" data-name="group-members" data-modal='0'>
                {{-- <div class="app-modal-header">Update your profile settings</div> --}}
                <div class="app-modal-body">
                    <h2 style="text-align: center" id="_group_title">Group Members</h2>
                    <br>
                    <br>

                    <p class="upload-avatar-details"></p>

                    <ul class="_members">
                        <img src="my image" alt="">
                        <li>Tauseed Zaman - <button class="app-btn btn-primary">Chat</button></li>
                    </ul>
                    <p class="divider"></p>
                </div>
                <div class="app-modal-footer">
                    <a href="javascript:void(0)" class="app-btn cancel">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
