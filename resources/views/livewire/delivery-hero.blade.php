<div>
    <form id="email-form" name="email-form" action="#" data-name="Email Form" method="POST" class="reg_form_w" wire:submit.prevent="save">
        <div class="text-center">
            <label for="avatar" class="user_avatar">
                <div class="user_avatar_overlay"></div>

            @if ($avatar_filtered)
                <img src="{{ $avatar_filtered->temporaryUrl()}}" class="rounded-circle shadow">
            @else

            <img src="{{ asset('img/avatar.jpg') }}" class="rounded-circle shadow">
            @endif
            <p wire:loading="" wire:target="avatar" class="text-success text-small">
                Uploading
            </p>
            @error('avatar')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror


        </label>
            <input id="avatar" class="d-none" type="file" wire:model.lazy="avatar">
        </div>

        <br>
        <br>

        <div class="form_group">
            <label for="firstname" class="input_label">Your first name : <span class="req_star">*</span>
            </label>
            <input type="text" class="text_input w-input" wire:model.lazy="firstname" maxlength="256" name="firstname" data-name="firstname" placeholder="MD." id="firstname" />
            @error('firstname')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form_group">
            <label for="lastname-2" class="input_label">Your Last name : <span class="req_star">*</span></label><input type="text" class="text_input w-input" wire:model.lazy="lastname" maxlength="256" name="lastname" data-name="lastname" placeholder="Kobir" id="lastname-2" />

            @error('lastname')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
            @enderror
        </div>
        <div class="form_group">
            <label for="email-5" class="input_label">Your Personal email :
                <span class="req_star">*</span>
            </label>
            <input type="email" class="text_input w-input"
                maxlength="256" name="email" wire:model.lazy="email"  data-name="email" placeholder="example@email.com" id="email"
                 />

                 @error('email')
                 <div class="invalid-feedback">
                     {{ $message }}
                 </div>
                 @enderror
            </div>
        <div class="form_group">
            <label for="phone" class="input_label">Your personal phone : <span
                    class="req_star">*</span>
            </label>
                    <input type="text" class="text_input w-input" maxlength="256" name="phone" wire:model.lazy="phone" data-name="phone" placeholder="01712345678" id="phone"
                 />
            @error('phone')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
                </div>
        <div class="form_group">
            <label for="nid" class="input_label">Your NID no : <span
                    class="req_star">*</span>
                </label>
                    <input type="number" class="text_input w-input"
                maxlength="256"  name="nid" wire:model.lazy="nid" data-name="nid" placeholder="199845435435435" id="nid"
                 />

                 @error('nid')
                 <div class="invalid-feedback">
                     {{ $message }}
                 </div>
                 @enderror
            </div>
        <div class="form_group">
            <label for="address" class="input_label">Your current Address : <span class="req_star">*</span>
            </label>
            <input type="text" class="text_input w-input" maxlength="256" name="address" data-name="address" placeholder="Bhola Bas Stand. __ " id="address"  wire:model.lazy="address" />
            @error('address')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form_group"><label for="father_name" class="input_label">Your father name :
                <span class="req_star">*</span>
                </label>
                    <input wire:model.lazy="father_name" type="text" class="text_input w-input"
                maxlength="256" name="father_name" data-name="father_name" placeholder="MD. Rofik"
                id="father_name"  />
                @error('father_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="form_group">
            <label for="father_phone" class="input_label">Your father Phone :
                <span class="req_star">*</span>
            </label>
            <input type="text" class="text_input w-input" maxlength="256" name="father_phone" data-name="father_phone" placeholder="01712345678" wire:model.lazy="father_phone" id="father_phone"  />

            @error('father_phone')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form_group">
            <label for="bio" class="input_label">Your Story : <span
                    class="req_star">*</span></label>
            <textarea placeholder="Tell something interesting about you  :)" maxlength="5000" id="bio" name="bio" data-name="bio"  class="test_area w-input" wire:model.lazy="bio"></textarea>
            @error('bio')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="text-center">

            <label for="nid_image" class="user_nid_image">
                Your NID Image <span class="req_star">*</span>
                <div class="user_nid_image_overlay"></div>

            @if ($nid_image_filtered)
            <img src="{{ $nid_image_filtered->temporaryUrl()}}" class="">
            @else

            <img src="{{ asset('img/nid.jpg') }}" style="border-radius: 14px;cursor: pointer;">
            @endif
            <p wire:loading="" wire:target="nid_image" class="text-success text-small">
                Uploading
            </p>
            </label>
            @error('nid_image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <input id="nid_image" class="d-none" type="file" wire:model.lazy="nid_image">
        </div>
        <br>
        <br>


        <div class="form_group">
            <label for="reference_by" class="input_label">Reference By:</label>
            <input type="text" class="text_input w-input" maxlength="256" wire:model.lazy="reference_by" name="reference_by" data-name="reference_by" placeholder="MD. Rakib" id="reference_by" />
            @error('reference_by')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form_group">
            <label class="terms_line">
                <input type="checkbox" id="checkox" name="checkox" style="margin-right: 10px" data-name="checkox" required  wire:model.lazy="checkox" />
                <span for="checkox" class="checkbox-label w-form-label">i agree to the terms and conditions of <a href="//facebook.com/ghorepai" class="link-2 link">Ghorepai</a>
                </span>
            </label>
            <div class="terms_line">
                <p class="note_s"><span class="text-span-3">Note:</span> After Form Submission We will call
                    you in 72 hours for confirmations and query.<a href="//facebook.com/ghorepai"
                        class="link-2 link"></a></p>
            </div>
        </div>
        <input type="submit" value="Submit" class="location_select_btn in_reg w-button" />
    </form>
</div>
