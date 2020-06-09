<div class="form-group">
    <label for="company_name">Название</label>
    @if(isset($company->name))
        <input type="text" class="form-control" id="company_name" name="name" required value="{{$company->name}}">
    @else
        <input type="text" class="form-control" id="company_name" name="name" required>
    @endif
</div>
<div class="form-group">
    <label for="company_email">Email</label>
    @if(isset($company->email))
        <input type="email" class="form-control" id="company_email" name="email" required value="{{$company->email}}">
    @else
        <input type="email" class="form-control" id="company_email" name="email" required>
    @endif
</div>
<div class="form-group">
    <label for="company_phone">Телефон</label>
    @if(isset($company->phone))
        <input type="tel" class="form-control" id="company_phone" name="phone" value="{{$company->phone}}" required>
    @else
        <input type="tel" class="form-control" id="company_phone" name="phone" required>
    @endif
</div>
<div class="form-group">
    <label for="company_activity">Деятельность Компании</label>
    @if(isset($company->activity))
        <textarea class="form-control" id="company_activity" name="activity" rows="3" required>{{$company->activity}}</textarea>
    @else
        <textarea class="form-control" id="company_activity" name="activity" rows="3" required></textarea>
    @endif
</div>
