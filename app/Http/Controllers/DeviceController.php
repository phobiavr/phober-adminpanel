<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeviceRequest;
use App\Http\Requests\UpdateDeviceRequest;
use App\Models\Device;
use Illuminate\Http\Response;

class DeviceController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index() {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create() {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param StoreDeviceRequest $request
   * @return Response
   */
  public function store(StoreDeviceRequest $request) {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param Device $device
   * @return Response
   */
  public function show(Device $device) {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param Device $device
   * @return Response
   */
  public function edit(Device $device) {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param UpdateDeviceRequest $request
   * @param Device $device
   * @return Response
   */
  public function update(UpdateDeviceRequest $request, Device $device) {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param Device $device
   * @return Response
   */
  public function destroy(Device $device) {
    //
  }
}
