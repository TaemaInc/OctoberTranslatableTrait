Add the trait to the component and call the `setupLocale` method in `onRun`

```
<?php namespace Vendor\Plugin\Components;

use Cms\Classes\ComponentBase;
use Lunfel\OctoberCMS\Translation\TranslatableComponentTrait;

class MyComponent extends ComponentBase
{
    use TranslatableComponentTrait;

    public function componentDetails()
    {
        return [
            'name'        => '...',
            'description' => '...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->setupLocale();
    }
}
```