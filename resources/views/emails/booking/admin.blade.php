<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASTPIK Booking Alert</title>
</head>

<body style="margin: 0; padding: 0; font-family: 'Helvetica Neue', Arial, sans-serif; font-size: 16px; line-height: 1.6; color: #333333; background-color: #f4f4f8;">
    <!-- Main Container -->
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f4f4f8;">
        <tr>
            <td align="center" style="padding: 30px 10px;">
                <!-- Email Container -->
                <table width="600" cellpadding="0" cellspacing="0" border="0" style="background-color: #ffffff; border-radius: 0; box-shadow: 0 3px 12px rgba(0,0,0,0.1);">
                    <!-- Top Accent Bar -->
                    <tr>
                        <td style="height: 8px; background: linear-gradient(to right, #4f46e5, #7c3aed); font-size: 0; line-height: 0;">&nbsp;</td>
                    </tr>

                    <!-- Header -->
                    <tr>
                        <td style="padding: 30px 40px 20px 40px;">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td>
                                        <!-- Logo and Company Name -->
                                        <table cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td style="padding-right: 12px;">
                                                    <!-- Logo as SVG -->
                                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="36" height="36" rx="6" fill="#4f46e5" />
                                                        <path d="M9 18H27M9 12H27M9 24H18" stroke="white" stroke-width="2.5" stroke-linecap="round" />
                                                    </svg>
                                                </td>
                                                <td>
                                                    <h1 style="margin: 0; font-size: 22px; font-weight: 700; color: #111827; letter-spacing: -0.5px;">FASTPIK</h1>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td align="right">
                                        <span style="display: inline-block; background-color: #f3f4f6; color: #4b5563; font-size: 14px; font-weight: 500; padding: 6px 12px; border-radius: 4px;">Admin Portal</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Main Heading -->
                    <tr>
                        <td style="padding: 0 40px 30px 40px;">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-bottom: 1px solid #e5e7eb;">
                                <tr>
                                    <td style="padding-bottom: 20px;">
                                        <h2 style="margin: 0; font-size: 24px; font-weight: 700; color: #111827;">New Booking Alert</h2>
                                        <p style="margin: 8px 0 0 0; color: #6b7280; font-size: 16px;">A new booking requires your attention</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Booking Overview -->
                    <tr>
                        <td style="padding: 0 40px 30px 40px;">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td style="padding-bottom: 15px;">
                                        <h3 style="margin: 0; font-size: 18px; font-weight: 600; color: #111827;">Booking Overview</h3>
                                    </td>
                                </tr>
                            </table>

                            <!-- Overview Cards -->
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <!-- Booking ID Card -->
                                    <td width="32%" style="padding-right: 2%;">
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f9fafb; border: 1px solid #e5e7eb;">
                                            <tr>
                                                <td style="padding: 15px;">
                                                    <p style="margin: 0 0 5px 0; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px; color: #6b7280; font-weight: 500;">Booking ID</p>
                                                    <p style="margin: 0; font-size: 16px; font-weight: 600; color: #111827;">{{ $booking->booking_id }}</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>

                                    <!-- Date Card -->
                                    <td width="32%" style="padding-right: 2%;">
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f9fafb; border: 1px solid #e5e7eb;">
                                            <tr>
                                                <td style="padding: 15px;">
                                                    <p style="margin: 0 0 5px 0; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px; color: #6b7280; font-weight: 500;">Travel Date</p>
                                                    <p style="margin: 0; font-size: 16px; font-weight: 600; color: #111827;">{{ \Carbon\Carbon::parse($booking->date)->format('F j, Y') }}</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>

                                    <!-- Status Card -->
                                    <td width="32%">
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #fef3c7; border: 1px solid #fde68a;">
                                            <tr>
                                                <td style="padding: 15px;">
                                                    <p style="margin: 0 0 5px 0; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px; color: #92400e; font-weight: 500;">Status</p>
                                                    <p style="margin: 0; font-size: 16px; font-weight: 600; color: #92400e;">Awaiting Assignment</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Customer Information -->
                    <tr>
                        <td style="padding: 0 40px 30px 40px;">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border: 1px solid #e5e7eb;">
                                <tr>
                                    <td style="padding: 15px; background-color: #f3f4f6; border-bottom: 1px solid #e5e7eb;">
                                        <h4 style="margin: 0; font-size: 16px; font-weight: 600; color: #111827;">Customer Information</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px;">
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td width="50%" style="padding-bottom: 10px;">
                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                            <td style="width: 24px; vertical-align: top; padding-right: 10px;">
                                                                <!-- User Icon SVG -->
                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10 10C12.2091 10 14 8.20914 14 6C14 3.79086 12.2091 2 10 2C7.79086 2 6 3.79086 6 6C6 8.20914 7.79086 10 10 10Z" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M3 18C3 14.6863 6.02944 12 10 12C13.9706 12 17 14.6863 17 18" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </td>
                                                            <td>
                                                                <p style="margin: 0 0 3px 0; font-size: 13px; color: #6b7280;">Customer Name</p>
                                                                <p style="margin: 0; font-weight: 500; color: #111827;">{{ $booking->name }}</p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td width="50%" style="padding-bottom: 10px;">
                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                            <td style="width: 24px; vertical-align: top; padding-right: 10px;">
                                                                <!-- Phone Icon SVG -->
                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M17 13.5V16C17 16.5523 16.5523 17 16 17C8.8203 17 3 11.1797 3 4C3 3.44772 3.44772 3 4 3H6.5C7.05228 3 7.5 3.44772 7.5 4C7.5 5.10457 7.67 6.1626 8 7.14C8.14 7.54 8.05 7.98 7.73 8.22L5.9 9.71C7.17 12.2 9.8 14.83 12.29 16.1L13.78 14.27C14.02 13.95 14.46 13.86 14.86 14C15.8374 14.33 16.8954 14.5 18 14.5C18.5523 14.5 19 14.9477 19 15.5V16C19 16.5523 18.5523 17 18 17" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </td>
                                                            <td>
                                                                <p style="margin: 0 0 3px 0; font-size: 13px; color: #6b7280;">Contact Number</p>
                                                                <p style="margin: 0; font-weight: 500; color: #111827;">{{ $booking->contact }}</p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                            <td style="width: 24px; vertical-align: top; padding-right: 10px;">
                                                                <!-- Email Icon SVG -->
                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M18 5H2V15H18V5Z" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M18 5L10 11L2 5" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </td>
                                                            <td>
                                                                <p style="margin: 0 0 3px 0; font-size: 13px; color: #6b7280;">Email Address</p>
                                                                <p style="margin: 0; font-weight: 500; color: #111827;">{{ $booking->email ?? 'N/A' }}</p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Trip Details -->
                    <tr>
                        <td style="padding: 0 40px 30px 40px;">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border: 1px solid #e5e7eb;">
                                <tr>
                                    <td style="padding: 15px; background-color: #f3f4f6; border-bottom: 1px solid #e5e7eb;">
                                        <h4 style="margin: 0; font-size: 16px; font-weight: 600; color: #111827;">Trip Details</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px;">
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                            <!-- Pickup & Destination -->
                                            <tr>
                                                <td style="padding-bottom: 20px;">
                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f9fafb; border: 1px solid #e5e7eb;">
                                                        <tr>
                                                            <td style="padding: 15px;">
                                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                    <tr>
                                                                        <td style="width: 24px; vertical-align: top; padding-right: 10px;">
                                                                            <!-- Location Start Icon SVG -->
                                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="10" cy="10" r="3" stroke="#4f46e5" stroke-width="1.5" />
                                                                                <path d="M16.5 10C16.5 13.5899 13.5899 16.5 10 16.5C6.41015 16.5 3.5 13.5899 3.5 10C3.5 6.41015 6.41015 3.5 10 3.5C13.5899 3.5 16.5 6.41015 16.5 10Z" stroke="#4f46e5" stroke-width="1.5" />
                                                                            </svg>
                                                                        </td>
                                                                        <td>
                                                                            <p style="margin: 0 0 3px 0; font-size: 13px; color: #6b7280;">Pickup Location</p>
                                                                            <p style="margin: 0; font-weight: 500; color: #111827;">{{ $booking->pickup }}</p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 0 15px;">
                                                                <div style="border-left: 1px dashed #d1d5db; height: 20px; margin-left: 10px;"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 15px;">
                                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                    <tr>
                                                                        <td style="width: 24px; vertical-align: top; padding-right: 10px;">
                                                                            <!-- Location End Icon SVG -->
                                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M10 10L10 17" stroke="#ef4444" stroke-width="1.5" stroke-linecap="round" />
                                                                                <circle cx="10" cy="7" r="4" stroke="#ef4444" stroke-width="1.5" />
                                                                            </svg>
                                                                        </td>
                                                                        <td>
                                                                            <p style="margin: 0 0 3px 0; font-size: 13px; color: #6b7280;">Destination</p>
                                                                            <p style="margin: 0; font-weight: 500; color: #111827;">{{ $booking->destination }}</p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <!-- Date, Time & Trip Type -->
                                            <tr>
                                                <td>
                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                            <td width="33%" style="padding-right: 10px;">
                                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border: 1px solid #e5e7eb;">
                                                                    <tr>
                                                                        <td style="padding: 12px;">
                                                                            <p style="margin: 0 0 3px 0; font-size: 13px; color: #6b7280;">Date</p>
                                                                            <p style="margin: 0; font-weight: 500; color: #111827;">{{ \Carbon\Carbon::parse($booking->date)->format('F j, Y') }}</p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td width="33%" style="padding-right: 10px;">
                                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border: 1px solid #e5e7eb;">
                                                                    <tr>
                                                                        <td style="padding: 12px;">
                                                                            <p style="margin: 0 0 3px 0; font-size: 13px; color: #6b7280;">Time</p>
                                                                            <p style="margin: 0; font-weight: 500; color: #111827;">{{ \Carbon\Carbon::parse($booking->time)->format('h:i A') }}</p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td width="33%">
                                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border: 1px solid #e5e7eb;">
                                                                    <tr>
                                                                        <td style="padding: 12px;">
                                                                            <p style="margin: 0 0 3px 0; font-size: 13px; color: #6b7280;">Trip Type</p>
                                                                            <p style="margin: 0; font-weight: 500; color: #111827;">{{ $booking->tripType }}</p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Vehicle Details -->
                    <tr>
                        <td style="padding: 0 40px 30px 40px;">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border: 1px solid #e5e7eb;">
                                <tr>
                                    <td style="padding: 15px; background-color: #f3f4f6; border-bottom: 1px solid #e5e7eb;">
                                        <h4 style="margin: 0; font-size: 16px; font-weight: 600; color: #111827;">Vehicle Requirements</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px;">
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td width="50%" style="padding-right: 10px;">
                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f9fafb; border: 1px solid #e5e7eb;">
                                                        <tr>
                                                            <td style="padding: 15px;">
                                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                    <tr>
                                                                        <td style="width: 24px; vertical-align: top; padding-right: 10px;">
                                                                            <!-- Car Icon SVG -->
                                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M3 11H17M5 14H5.01M15 14H15.01M6 6.5L7.5 3H12.5L14 6.5M6.5 17H13.5C14.6046 17 15.5 16.1046 15.5 15V8C15.5 6.89543 14.6046 6 13.5 6H6.5C5.39543 6 4.5 6.89543 4.5 8V15C4.5 16.1046 5.39543 17 6.5 17Z" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                            </svg>
                                                                        </td>
                                                                        <td>
                                                                            <p style="margin: 0 0 3px 0; font-size: 13px; color: #6b7280;">Vehicle Type</p>
                                                                            <p style="margin: 0; font-weight: 500; color: #111827;">{{ $booking->vehicle }}</p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td width="50%">
                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f9fafb; border: 1px solid #e5e7eb;">
                                                        <tr>
                                                            <td style="padding: 15px;">
                                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                    <tr>
                                                                        <td style="width: 24px; vertical-align: top; padding-right: 10px;">
                                                                            <!-- People Icon SVG -->
                                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M7 8C8.10457 8 9 7.10457 9 6C9 4.89543 8.10457 4 7 4C5.89543 4 5 4.89543 5 6C5 7.10457 5.89543 8 7 8Z" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                                <path d="M13 8C14.1046 8 15 7.10457 15 6C15 4.89543 14.1046 4 13 4C11.8954 4 11 4.89543 11 6C11 7.10457 11.8954 8 13 8Z" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                                <path d="M4 16V14C4 12.8954 4.89543 12 6 12H8C9.10457 12 10 12.8954 10 14V16" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                                <path d="M10 16V14C10 12.8954 10.8954 12 12 12H14C15.1046 12 16 12.8954 16 14V16" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                            </svg>
                                                                        </td>
                                                                        <td>
                                                                            <p style="margin: 0 0 3px 0; font-size: 13px; color: #6b7280;">Passengers</p>
                                                                            <p style="margin: 0; font-weight: 500; color: #111827;">{{ $booking->passengers }}</p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Action Required -->
                    <tr>
                        <td style="padding: 0 40px 30px 40px;">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #eff6ff; border: 1px solid #bfdbfe; border-left: 5px solid #3b82f6;">
                                <tr>
                                    <td style="padding: 20px;">
                                        <h4 style="margin: 0 0 10px 0; color: #1e40af; font-size: 16px; font-weight: 600;">Action Required</h4>
                                        <p style="margin: 0 0 15px 0; color: #1e3a8a;">This booking needs to be assigned to a driver. Please take action as soon as possible.</p>
                                        <table cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td>
                                                    <a href="{{ url('/adminlogin') }}" style="display: inline-block; background-color: #3b82f6; color: #ffffff; font-weight: 600; font-size: 15px; padding: 12px 24px; text-decoration: none; border-radius: 4px;">Login to Admin Panel</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Important Notes -->
                    <tr>
                        <td style="padding: 0 40px 30px 40px;">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td style="padding-bottom: 15px;">
                                        <h3 style="margin: 0; font-size: 18px; font-weight: 600; color: #111827;">Important Notes</h3>
                                    </td>
                                </tr>
                            </table>

                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border: 1px solid #e5e7eb;">
                                <tr>
                                    <td style="padding: 0;">
                                        <!-- Driver Instructions -->
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td style="padding: 15px; border-bottom: 1px solid #e5e7eb;">
                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                            <td width="24" style="vertical-align: top; padding-right: 12px;">
                                                                <!-- Checklist Icon SVG -->
                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7 9L9 11L13 7M3 5H17M5 5V15C5 16.1046 5.89543 17 7 17H13C14.1046 17 15 16.1046 15 15V5" stroke="#4f46e5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </td>
                                                            <td>
                                                                <p style="margin: 0 0 5px 0; font-weight: 600; color: #4f46e5;">Driver Instructions</p>
                                                                <ul style="margin: 0; padding: 0 0 0 15px; color: #4b5563;">
                                                                    <li style="margin-bottom: 5px;">Call the customer 30 minutes before pickup</li>
                                                                    <li style="margin-bottom: 5px;">Ensure vehicle cleanliness and fuel levels</li>
                                                                    <li style="margin-bottom: 5px;">Verify all necessary permits for the journey</li>
                                                                    <li>Inform about any potential delays</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <!-- Additional Information -->
                                            <tr>
                                                <td style="padding: 15px;">
                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                            <td width="24" style="vertical-align: top; padding-right: 12px;">
                                                                <!-- Info Icon SVG -->
                                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10 14V9M10 6H10.01M19 10C19 14.9706 14.9706 19 10 19C5.02944 19 1 14.9706 1 10C1 5.02944 5.02944 1 10 1C14.9706 1 19 5.02944 19 10Z" stroke="#f97316" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </td>
                                                            <td>
                                                                <p style="margin: 0 0 5px 0; font-weight: 600; color: #f97316;">Additional Information</p>
                                                                <ul style="margin: 0; padding: 0 0 0 15px; color: #4b5563;">
                                                                    <li style="margin-bottom: 5px;">Inform about additional charges (tolls, permits)</li>
                                                                    <li style="margin-bottom: 5px;">For hill station trips, ensure appropriate vehicle</li>
                                                                    <li style="margin-bottom: 5px;">Confirm driver allowance for long journeys</li>
                                                                    <li>Keep all parking receipts for reimbursement</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>


                    <!-- Footer -->
                    <tr>
                        <td style="padding: 25px 40px; background-color: #f9fafb; border-top: 1px solid #e5e7eb;">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td align="center">
                                        <p style="margin: 0 0 10px 0; color: #6b7280; font-size: 14px;">This is an automated notification. Please do not reply to this email.</p>
                                        <p style="margin: 0; color: #6b7280; font-size: 14px;">© 2023 FASTPIK. All rights reserved.</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML = "window.__CF$cv$params={r:'94124960341d8013',t:'MTc0NzQ3NjIyNC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script>
</body>

</html>
