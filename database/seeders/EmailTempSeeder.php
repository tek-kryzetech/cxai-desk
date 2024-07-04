<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Currency;
use App\Models\EmailTemplate;
use Illuminate\Database\Seeder;

class EmailTempSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['category' => 'Email Verification', 'slug' => 'email-verification', 'subject' => 'Verify Your Account', 'body' => '<p>Hello, {{username}}
            </p><p>            Thank you for creating an account with us. We\'re excited to have you as a part of our community!

                Before you can start using your account, we need to verify your email address. Please click on the link below to complete the verification process:
            </p><p>

                Link: {{email_verify_url}}
                        </p>', 'default' => 1, 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['category' => 'Password Reset', 'slug' => 'password-reset', 'subject' => 'Reset your password', 'body' => '<div><b>Hello</b> ,{{username}}</div><div><br></div><div>we\'re sending you this email because you requested a password reset. Click on this link to create a new password.</div><div><br></div><div>Set a new password . Here is a link -</div><div><br></div><div>Link :&nbsp;<span style="background-color: rgb(209, 231, 221); color: rgb(15, 81, 50); font-family: inter, sans-serif; text-align: var(--bs-body-text-align);">{{<b>reset_password_url</b>}}</span></div><div><br></div><div>If you didn\'t request a password reset, you can ignore this email. Your password will not be a changed.</div>', 'default' => 1, 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['category' => 'Ticket Create Notify For Customer', 'slug' => 'ticket-create-notify-for-customer', 'subject' => 'New Ticket Created - {{tracking_no}}', 'body' =>'<p><b>Dear</b> {{username}},
            </p><p>
                            We are happy to inform you that a new ticket has been successfully created in our system with the following details:
            </p><p>
                            Tracking No: <b>{{tracking_no}}
            </b></p><p>                Category: {{ticket_category}}
            </p><p>                Date Created: {{ticket_created_time}}
            </p><p>                Title: {{ticket_title}}</p><p>
                            You can track the progress of your ticket and provide any additional information or updates by logging into your account on our support portal.

                            If you have any questions or need further assistance, please don\'t hesitate to reply to this email or contact our support team at {{contact_email}}  or {{contact_phone}}.

                            Thank you for using our services!
            </p><p><b>
                Best regards</b>,
                            {{app_name}}</p>', 'default' => 1, 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['category' => 'Email Ticket Create Notify For Customer', 'slug' => 'email-ticket-create-notify-for-customer', 'subject' => 'New Ticket Created - {{tracking_no}}', 'body' => '<div><font color="#0f5132" face="inter, sans-serif"><b>Dear</b> {{username}},</font></div><div><font color="#0f5132" face="inter, sans-serif"><br></font></div><div><font color="#0f5132" face="inter, sans-serif">We are happy to inform you that a new email ticket has been successfully created in our system with the following details:&nbsp;</font></div><div><font color="#0f5132" face="inter, sans-serif"><br></font></div><div><font color="#0f5132" face="inter, sans-serif">Tracking No: {{<b>tracking_no</b>}}</font></div><div><font color="#0f5132" face="inter, sans-serif"><br></font></div><div><font color="#0f5132" face="inter, sans-serif">Category: {{ticket_category}}&nbsp;</font></div><div><font color="#0f5132" face="inter, sans-serif"><br></font></div><div><font color="#0f5132" face="inter, sans-serif">Date Created: {{ticket_created_time}}&nbsp;</font></div><div><font color="#0f5132" face="inter, sans-serif"><br></font></div><div><font color="#0f5132" face="inter, sans-serif">Title: {{ticket_title}}&nbsp;</font></div><div><br></div><div><font color="#0f5132" face="inter, sans-serif">You can track the progress of your ticket and provide any additional information or updates by logging into your account on our support portal. If you have any questions or need further assistance, please don\'t hesitate to reply to this email or contact our support team at {{contact_email}} or {{contact_phone}}. Thank you for using our services!</font></div><div><br></div><div><font color="#0f5132" face="inter, sans-serif"><b>Best regards</b>, {{app_name}}</font></div>', 'default' => 1, 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['category' => 'Ticket Create Notify For Admin', 'slug' => 'ticket-create-notify-for-admin', 'subject' => 'New Ticket Created - {{tracking_no}}', 'body' => '<div><b>Dear</b> {{username}},</div><div><br></div><div>A new ticket has been created in our system. Ticket Tracking No: {{<b>tracking_no</b>}} with the following details:</div><div><br></div><div>Category: {{ticket_category}}&nbsp;</div><div><br></div><div>Date Created: {{ticket_created_time}}&nbsp;</div><div><br></div><div>Title: {{ticket_title}}&nbsp;</div><div><br></div><div>Thank you for your attention.</div><div><b>Best regards</b>, {{app_name}}</div><div><br></div>', 'default' => 1, 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['category' => 'Ticket Create Notify For Agent', 'slug' => 'ticket-create-notify-for-agent', 'subject' => 'New Ticket Created - {{tracking_no}}', 'body' => '<div><b>Dear</b> {{username}},</div><div><br></div><div>A new ticket has been created in our system. Ticket created by {{customer_name/agent_name}} with the following details:</div><div><br></div><div>Tracking No: {{tracking_no}}</div><div><br></div><div>Category: {{ticket_category}}&nbsp;</div><div><br></div><div>Date Created: {{ticket_created_time}}&nbsp;</div><div><br></div><div>Title: {{ticket_title}}&nbsp;</div><div><br></div><div>You can view and manage this ticket in the agent dashboard. As an agent, you have full access to ticket management, including assigning tickets to agents and resolving them.</div><div>If you have any questions or need further assistance, please don\'t hesitate to reply to this email or contact our support team.</div><div><br></div><div>Thank you for your attention.</div><div><b>Best regards</b>, {{app_name}}</div>', 'default' => 1, 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['category' => 'Ticket Conversation For Admin', 'slug' => 'ticket-conversation-for-admin', 'subject' => 'New Reply For Your Ticket -{{tracking_no}}', 'body' => '<div><span style="font-weight: bolder;">Dear</span>&nbsp;{{username}},</div><div><br></div><div>A new ticket has been created in our system. Ticket Tracking No: {{<span style="font-weight: bolder;">tracking_no</span>}} with the following details:</div><div><br></div><div>Category: {{ticket_category}}&nbsp;</div><div><br></div><div>Date Created: {{ticket_created_time}}&nbsp;</div><div><br></div><div>Title: {{ticket_title}}&nbsp;</div><div><br></div><div>Thank you for your attention.</div><div><span style="font-weight: bolder;">Best regards,</span>&nbsp;{{app_name}}</div>', 'default' => 1, 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['category' => 'Ticket Conversation For Agent', 'slug' => 'ticket-conversation-for-agent', 'subject' => 'New Reply For Your Ticket - {{tracking_no}}', 'body' => '<div><span style="font-weight: bolder;">Dear</span>&nbsp;{{username}},</div><div><br></div><div>We are happy to inform you that your Tracking No: {{<span style="font-weight: bolder;">tracking_no</span>}} has reply in our system with the following details:&nbsp;</div><div><br></div><div><br></div><div>Category: {{ticket_category}}&nbsp;</div><div><br></div><div>Date Created: {{ticket_created_time}}&nbsp;</div><div><br></div><div>Title: {{ticket_title}}&nbsp;</div><div><br></div><div>Thank you for your attention.</div><div><span style="font-weight: bolder;">Best regards</span>, {{app_name}}</div>', 'default' => 1, 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['category' => 'Ticket Conversation For Customer', 'slug' => 'ticket-conversation-for-customer', 'subject' => 'New Reply For Your Ticket - {{tracking_no}}', 'body' => '<div><span style="font-weight: bolder;">Dear</span>&nbsp;{{username}},</div><div><br></div><div>We are happy to inform you that your Tracking No: {{<span style="font-weight: bolder;">tracking_no</span>}} has reply in our system with the following details:&nbsp;</div><div><br></div><div>Category: {{ticket_category}}&nbsp;</div><div><br></div><div>Date Created: {{ticket_created_time}}&nbsp;</div><div><br></div><div>Title: {{ticket_title}}&nbsp;</div><div><br></div><div>You can track the progress of your ticket and provide any additional information or updates by logging into your account on our support portal. If you have any questions or need further assistance, please don\'t hesitate to reply to this email or contact our support team at {{contact_email}} or {{contact_phone}}. Thank you for using our services!</div><div><br></div><div><span style="font-weight: bolder;">Best regards</span>, {{app_name}}</div>', 'default' => 1, 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['category' => 'Ticket Status Change For Customer', 'slug' => 'ticket-status-change-for-customer', 'subject' => 'Ticket Status Changed - {{tracking_no}}', 'body' => '<div><span style="font-weight: bolder;">Dear</span>&nbsp;{{username}},</div><div><br></div><div>We are happy to inform you that your Tracking No: {{<span style="font-weight: bolder;">tracking_no</span>}} has ticket status change in our system with the following details:&nbsp;</div><div><br></div><div>Category: {{ticket_category}}&nbsp;</div><div><br></div><div>Date Created: {{ticket_created_time}}&nbsp;</div><div><br></div><div>Title: {{ticket_title}}&nbsp;</div><div><br></div><div>You can track the progress of your ticket and provide any additional information or updates by logging into your account on our support portal. If you have any questions or need further assistance, please don\'t hesitate to reply to this email or contact our support team at {{contact_email}} or {{contact_phone}}. Thank you for using our services!</div><div><br></div><div><span style="font-weight: bolder;">Best regards</span>, {{app_name}}</div>', 'default' => 1, 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['category' => 'Ticket Review For Agent', 'slug' => 'ticket-review-for-agent', 'subject' => 'You got a review - {{tracking_no}}', 'body' => '<div><span style="font-weight: bolder;">Dear</span>&nbsp;{{username}},</div><div><br></div><div>We are happy to inform you that your Tracking No: {{<span style="font-weight: bolder;">tracking_no</span>}} has review in our system with the following details:&nbsp;</div><div><br></div><div>Category: {{ticket_category}}&nbsp;</div><div><br></div><div>Date Created: {{ticket_created_time}}&nbsp;</div><div><br></div><div>Title: {{ticket_title}}&nbsp;<span style="text-align: var(--bs-body-text-align);">&nbsp;</span></div><div><br></div><div>Thank you for your attention.</div><div><span style="font-weight: bolder;">Best regards</span>, {{app_name}}</div>', 'default' => 1, 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['category' => 'Ticket assign For Agent And Admin', 'slug' => 'ticket-assign-for-agent-admin', 'subject' => 'ticket assign', 'body' => 'ticket asaingn', 'default' => 1, 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
        ];
        EmailTemplate::insert($data);
    }
}
