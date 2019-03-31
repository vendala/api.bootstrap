<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Events\Api\V1\User\StorageEvent;
use App\Http\Requests\User\StorageRequest;
use App\Transformers\Api\V1\UserTransformer;
use Illuminate\Contracts\Events\Dispatcher as Event;

/**
 * Class StorageController.
 *
 * @package App\Http\Controllers\Api\V1\User
 */
class StorageController extends UserController
{
    /**
     * @var \Illuminate\Contracts\Events\Dispatcher
     */
    private $event;

    /**
     * StorageController constructor.
     *
     * @param \Illuminate\Contracts\Events\Dispatcher $event
     */
    public function __construct(Event $event)
    {
        parent::__construct();

        $this->event = $event;
    }

    /**
     * @param \App\Http\Requests\User\StorageRequest $request
     *
     * @return \Dingo\Api\Http\Response
     */
    public function __invoke(StorageRequest $request)
    {
        $event =  $this->event->dispatch(new StorageEvent($request->name, $request->email, $request->password));4

        $user = $event[0];

        return $this->response->item($user, new UserTransformer());
    }
}
