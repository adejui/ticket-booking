<?php


interface BookingRepositoryInterface
{
    public function createBooking(array $data);
    public function findByTrxIdAndPhoneNumber($bookingTrxId, $phoneNumber);
}
