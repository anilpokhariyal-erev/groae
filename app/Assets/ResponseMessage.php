<?php

namespace App\Assets;

abstract class ResponseMessage
{
    const NONE = 'None';

    const CreateRolePermissionValidationError = 'Atleast one permission is required to create role';
    const ResetPasswordRequestSent = "We have emailed your password reset request to administrator.";
    const CustomerCreated = "Customer has been created successfully.";
    const LeadCreated = "Lead has been created successfully.";
    const WrongMsg = "Something went Wrong";
    const FreezonePageCreate = "Freezone Page successfully created";
    const FreezonePageUpdate = "Freezone Page successfully Updated";
    const FreezoneCreate = "Freezone Successfully Created";
    const WrongOldPassword = "Your old password is incorrect";
    const DifferentNewPassword = 'The :attribute must not match the previous password.';

    const PASSWORD_UPDATE_SUCCESS = "Your new password has been updated";
    const RESET_LINK_EXPIRED = 'This password reset link has been expired';
    const CUSTOMER_PASSWORD_RESET_MESSAGE = 'Password Reset Link Sent To Your Email Address';
    const ACCOUNT_CREATED = 'Your account has been created';
    const SAME_OLD_PASSWORD = 'The password must not be the same as the previous password';
    const SESSION_LINK_EXPIRED = 'Session expired, Please try again';
    const INVALID_REQUEST = 'Invalid request, Please try again';
    const CONTACT_US_SUBMIT = 'We have received your message. We will get back to you shortly.';
    const LOGIN_FIRST_COST_CALCULATOR = 'Please login first to calculate cost';
    const PROFILE_UPDATED = 'Profile has been updated successfully';
    const RECALCULATE = 'Please re-calculate the freezone cost';

    //backend
    const PageCreateMsg = 'Page created successfully';
    const PageUpdateMsg =  'Static Page Updated successfully';
    const OfferCreateMsg = 'Offer created successfully';
    const OfferUpdateMsg = 'Offer Updated successfully';
    const OfferDeleteMsg = 'Offer deleted successfully';

    const FreezoneAlreadyHaveOffer = 'This Freezone already have one offer. Only one offer per freezone are allowed';
    const InvalidDocumentId = 'Invalid Document ID';

    const ContactDetailNotFound = 'Contact Detail not found';

    const ReplySentSuccessfully = 'Your message has been successfully sent.';
}
